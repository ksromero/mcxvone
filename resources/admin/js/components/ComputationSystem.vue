<template>
		<b-card>
			<div class="mt-5">
			<div class="row">
				<div class="col-md-12">
					<b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Inputs">
						<div class="justify-content-center">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label >Selling Retail Price (SRP) or Least Cash Price</label>
					                	<input type="text" v-model="srp" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-3">
					          		<div class="form-group">
										<label >Term</label>
					                	<input type="text" v-model="term" class="form-control form-control-sm">
									</div>
					          	</div>
				          		<div class="col-md-3">
					          		<div class="form-group">
										<label >Interest Rate</label>
					                	<input type="text" v-model="interestRate" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label >Rebate / Discount</label>
					                	<input type="text" v-model="rebate" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-3">
					          		<div class="form-group">
										<label >Downpayment</label>
					                	<input type="text" v-model="downpayment" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-3">
					          		<div class="form-group">
										<label >Registration</label>
					                	<input type="text" v-model="registration" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label >Net Downpayment</label>
					                	<input type="text" v-model="netDownpayment" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>
						</div>		
					</b-card>
				</div>
			</div>			
		</div>

        <div class="text-center mt-3">
          <button type="button" @click="compute()" class="btn btn-md btn-primary text-center">COMPUTE</button>
        </div>

		<div class="mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
					<b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Outputs">
						<div class="justify-content-center">
							<div class="row">
					          	<div class="col-md-6">
					          		<div class="form-group">
										<label >Monthly Amortization</label>
					                	<input type="text" v-model="monthlyAmortization" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-6">
					          		<div class="form-group">
										<label >Net Monthly Amortization</label>
					                	<input type="text" v-model="netMonthlyAmortization" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label >Monthly Amortization (Principal Portion)</label>
					                	<input type="text" v-model="monthlyAmortizationPrincipal" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-6">
					          		<div class="form-group">
										<label >Monthly Amortization (Interest Portion)</label>
					                	<input type="text" v-model="monthlyAmortizationInterest" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label >Gross Pronote</label>
					                	<input type="text" v-model="grossPronote" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-3">
					          		<div class="form-group">
										<label >Net Pronote</label>
					                	<input type="text" v-model="netPronote" class="form-control form-control-sm">
									</div>
					          	</div>
					          	<div class="col-md-3">
					          		<div class="form-group">
										<label >Book Value of Repo Unit</label>
					                	<input type="text" v-model="bookValue" class="form-control form-control-sm">
									</div>
					          	</div>
							</div>

						</div>		
					</b-card>
				</div>
			</div>			
		</div>
		</b-card>
</template>

<script>
	export default {
        data() {
          return {
            srp: null,
            term: null,
            interestRate: null,
            rebate: null,
            downpayment:null,
            registration:null,
            netDownpayment:null,
            monthlyAmortization:null,
            netMonthlyAmortization: null,
            monthlyAmortizationPrincipal:null,
            monthlyAmortizationInterest: null,
            grossPronote: null,
            netPronote:null,
            bookValue:null
          }
        },

        methods: {
          compute(){
          	this.monthlyAmortization = this.computeMonthlyAmortization()
          	this.netMonthlyAmortization = this.computeNetMonthlyAmortization()
          	this.monthlyAmortizationPrincipal = this.computeMonthlyAmortizationPrincipal()
          	this.monthlyAmortizationInterest = this.computeMonthlyAmortizationInterest()
          	this.grossPronote = this.computeGrossPronote()
          	this.netPronote = this.computeNetPronote()
          },
          round5(x)
		  {
			return (x % 5) >= 2.5 ? parseInt(x / 5) * 5 + 5 : parseInt(x / 5) * 5;
	      },
          computeMonthlyAmortization(){
           const x = this.srp - this.netDownpayment
           const y = (1+(this.term*this.interestRate))
           const monthlyAmortization = ((x * y)/this.term)+500
           return this.round5(monthlyAmortization)
          },
          computeNetMonthlyAmortization(){
          	const netMonthlyAmortization = this.monthlyAmortization - this.rebate
          	return netMonthlyAmortization
          },
          computeMonthlyAmortizationPrincipal(){
          	const x = this.monthlyAmortization - this.rebate
          	const y = (1+(this.term*this.interestRate))
          	const monthlyAmortizationPrincipal = x / y
          	return monthlyAmortizationPrincipal
          },
          computeMonthlyAmortizationInterest(){
          	const monthlyAmortizationInterest = this.netMonthlyAmortization - this.monthlyAmortizationPrincipal
          	return monthlyAmortizationInterest
          },
          computeGrossPronote(){
          	const grossPronote = this.monthlyAmortization * this.term
          	return grossPronote
          },
          computeNetPronote(){
          	const netPronote = (this.monthlyAmortization - this.rebate) * this.term
          	return netPronote
          },
          computeBookValueOfRepoUnit(){

          }
        }
    }
</script>