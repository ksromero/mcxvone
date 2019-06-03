<template>
	<div class="container">
			<b-card no-body>
		      <b-tabs v-model="tabIndex" small card>

		      	<!-- Customer's Information -->
		        <b-tab title="Customer's Info" justified>
		        	<b-card>
                    <label>Customer's Name</label>
                    <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Surname</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">First Name</small>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Middle Name</small>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nickname</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>

                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>

                        </div>

                         <div class="col-md-4">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <date-picker v-model="date" class="d-block" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                          </div>
                        </div>                       
                    </div>
            
                    <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control form-control-sm">
                          </div>          
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label >Sex</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Sex</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>            
                        </div>
                       
                        <div class="col-md-2">
                          <div class="form-group">
                            <label >Status</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Status</option>
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Widowed">Widowed</option>
                            </select>
                          </div>
                        </div>
                    </div>

                    <hr>
                    <label>Present Address</label>
                    <div class="row">
                        <div class="col-md-1">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">No</small>
                          </div> 
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Street</small>
                          </div>

                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Barangay</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">City/Municipality</small>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Province</small>
                          </div>
                        </div>

                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                          <label>Length of Stay</label>
                          <div class="form-group d-flex">
                            <input type="text" class="form-control form-control-sm">
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Length</option>
                              <option value="Years">Years</option>
                              <option value="Months">Months</option>
                              <option value="Days">Days</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Telephone Number</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                    </div>

                    <hr>
                    <label>Provincial Address</label>
                    <div class="row">
                        <div class="col-md-1">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">No</small>
                          </div>  
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Street</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Barangay</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">City/Municipality</small>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Province</small>
                          </div>
                        </div>

                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Spouse's Name</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <date-picker v-model="date" class="d-block" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                          </div>
                         
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                   	</div>
                    <hr>

                    <!-- Dependents -->
                    <b-card header="Dependents">
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Name of dependent</th>
                          <th scope="col">Relationship</th>
                          <th scope="col">Age</th>
                          <th scope="col">Name of School</th>
                          <th scope="col">Monthly Matriculation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text-center">
                      <button type="button" @click="dependentModal = !dependentModal" class="btn btn-sm btn-primary text-center">Add Dependent</button>
                    </div>

                    </b-card>
                    <b-modal v-model="dependentModal">
                      <div class="form-group">
                        <label>Name of Dependent</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Relationship</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Name of School</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Monthly Matriculation</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                    </b-modal>
                    <!-- Dependent Modal -->
                  </b-card>        
		    	</b-tab>

		    	<!-- Source of Income -->
		        <b-tab title="Source Of Income">
		          	   <b-card>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Employer's Name</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Position Occupied</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Employer's Address</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Length of Employment</label>
                              <div class="form-group d-flex">
                                <input type="text" class="form-control form-control-sm">
                                <select class="custom-select custom-select-sm">
                                  <option disabled selected>Select Length</option>
                                  <option value="Years">Years</option>
                                  <option value="Months">Months</option>
                                  <option value="Days">Days</option>
                                </select>
                              </div>
                            </div>                           
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Monthly Income</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Other Compensation</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                        </div>
 
                      <b-card header="Spouse's Employer Information">
                      	<div class="row">
                      		<div class="col-md-12">
                            <div class="form-group">
                              <label>Spouse's Name</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>                   			
                      		</div>
                      	</div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Employer's Name</label>
                              <input type="text" class="form-control-sm form-control">
                            </div>
                          </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                <label>Position Occupied</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <label>Employer's Address</label>
                              <input type="text" class="form-control-sm form-control">
                            </div>
                          </div>

                           <div class="col-md-4">
                            <div class="form-group">
                              <label>Length of Employment</label>
                              <div class="form-group d-flex">
                                <input type="text" class="form-control form-control-sm">
                                <select class="custom-select custom-select-sm">
                                  <option disabled selected>Select Length</option>
                                  <option value="Years">Years</option>
                                  <option value="Months">Months</option>
                                  <option value="Days">Days</option>
                                </select>
                              </div>
                            </div>

                          </div>
                        </div>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Monthly Income</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>

                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Other Compensation</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>

                          </div>

                      </div>
                      </b-card>

                      <div class="row mt-3">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label>Total Estimated Income per Month</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>

                        </div>
                      </div>
                             
                    </b-card>
		        </b-tab>

		        <!-- Personal References -->
		        <b-tab title="Personal References">
		        	<b-card>
			        	<table class="table table-striped">
	                      <thead>
	                        <tr>
	                          <th scope="col">Name</th>
	                          <th scope="col">Business / Employer / Occupation</th>
	                          <th scope="col">Address</th>
	                          <th scope="col">Relation to Applicant</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td>Mark</td>
	                          <td>Otto</td>
	                          <td>@mdo</td>
	                          <td>@mdo</td>
	                        </tr>
	                        <tr>
	                          <td>Jacob</td>
	                          <td>Thornton</td>
	                          <td>@fat</td>
	                          <td>Otto</td>
	                        </tr>
	                      </tbody>
	                    </table>

	                    <div class="text-center">
	                      <button type="button" @click="personalReferenceModal = !personalReferenceModal" class="btn btn-sm btn-primary text-center">Add Personal Reference</button>
	                    </div>

                      

	                   <!-- Personal Reference Modal -->
	                  <b-modal v-model="personalReferenceModal">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Business / Employer / Occupation</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Relation to Applicant</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </b-modal>
		        	</b-card>
		        </b-tab>

		        <!-- Character -->
		        <b-tab title="Character">
		        	<div class="row">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Reputation with Neighbors">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Good</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Bad</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Civic Oriented</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Drunkard</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Easy to Deal With</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Cooperative</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Kind of Honest Person</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Extravagant</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Compulsive Gambler</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Notorious</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Frequented by Collectors</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group d-inline col-md-12">
                        <label>Explain</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                  </b-card>
                </div>
                
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Reputation with Creditors / Suppliers / Co-Employee">
                    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Good</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Slow Payor</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Good Payor</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Extravagant</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Thrifty</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Heavily</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Easily to deal with</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Many Dependents</label>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Explain</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                  </b-card>   
                </div>

              </div>

              <div class="row mt-5">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Civic / Political / Religious Affiliations">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Positive</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Negative</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>If active, affiliated with </label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Explain</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>


                  </b-card>
                </div>

                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Court / Verification / Checking">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Positive</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Negative</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                    </div>

                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                         <label>If positive, applicant is:</label>  
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <label>Plaintiff</label>
                            <input type="text" class="form-control form-control-sm">
                      </div>

                      <div class="col-md-6">
                          <label>Defendant</label>
                            <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <label>Nature of Case</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label>Explain</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>
                    </div>

                  </b-card>
                </div>
              </div>
		        </b-tab>

		        <!-- Capital-->
		        <b-tab title="Capital">
	             <div class="row">
                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Residence">
                      <div class="row">
                        <div class="col-md-6">
                          <label>House / Lot</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >House</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Lot Only</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >Owned</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Rented</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >Others</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label>If Rented: Landlord</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <label>Rental</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-12">
                          <label>Explain</label>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                      </div>

                    </b-card>
                  </div>

                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Residence Description">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Semi Mansion</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >Bungalow</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Bamboo / Cogon</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >Apartment</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Duplex</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="col-md-6">
                          <label >Shanty</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>2-Storey Wooden</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Appraisal</label>
                          <input type="text" class="form-control form-control-sm">
                          <small class="form-text text-center text-muted">(If owned House and Lot)</small>
 
                        </div>
                      </div>
                    </b-card>

                  </div>
               </div>

               <!-- 2nd Row -->
               <div class="row mt-5">
                  <div class="col-md-12">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Assets">
                      <div class="row">
                        <div class="col-md-6">

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Real Properties</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>

                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Residential</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Commercial</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>

                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Agricultural</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Personal Properties</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <label>Remarks</label>
                              <input type="text" class="form-control-sm form-control">
                            </div>
                          </div>

                           <div class="row">
                            <div class="col-md-12">
                              <label>House and Lot</label>
                              <input type="text" class="form-control-sm form-control">
                            </div>
                          </div>

                           <div class="row">
                            <div class="col-md-12">
                              <label>Tax Declaration No.</label>
                              <input type="text" class="form-control-sm form-control">
                            </div>
                          </div>

                        </div>

                        <div class="col-md-6">
                          <label>Properties with Encumbrances:</label>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Face Amount</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>                           
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Term</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>
                              
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Amortization</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>
                              
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>O.B.</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>                             
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Other Remarks</label>
                                <input type="text" class="form-control-sm form-control">
                              </div>                      
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Total Estimated Capital</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </b-card>
                  </div>

               </div>
		        </b-tab>

            <!-- Condition -->
            <b-tab title="Condition">
              <div class="row mb-5">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Accessibilty of Residence">
                    <div class="row">
                      <div class="col-md-6">
                        <label>Buses / Jeepneys</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>

                      <div class="col-md-6">
                        <label>Tricycle</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label>Private Vehicles</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>

                      <div class="col-md-6">
                        <label>Totally Inaccessible</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-7">
                        <label>Will be having difficulty to reach</label>
                        <input type="text" class="form-control-sm form-control">
                      </div>
                    </div>
                  </b-card>
                </div>

                 <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Neighbor Type">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Residential</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>Commercial</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Subdivision</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>Squatter</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Rural Area</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label>Others, please specifiy</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>


                    </b-card>
                </div>     
              </div>

              <div class="row">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Residency / Length of Stay">
                      <div class="row">
                        <div class="col-md-6">
                          <label>Less than 1 year</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>More than 1 year</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>2 years and over</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>Since birth</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>
                  </b-card>
                </div>

                 <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Age / Physical Appearance">
                      <div class="row">
                        <div class="col-md-6">
                          <label>18 years old and above</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>60 years old</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label>Robust / Athletic Type</label>
                          <input type="text" class="form-control-sm form-control">
                        </div>

                        <div class="col-md-6">
                          <label>Pale / Weakling / Sickly </label>
                          <input type="text" class="form-control-sm form-control">
                        </div>
                      </div>
                    </b-card>
                </div>     
              </div>

            </b-tab>

            <!-- Capital-->
            <b-tab title="Capacity">
                <div class="row">
                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Employment">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Applicant</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Permanent</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Temporary</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Employer</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Length of Stay</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <hr>
                      <div class="row mb-3">
                        <div class="col-md-12 font-weight-bold">
                          Spouse
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Applicant</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Permanent</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Temporary</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Employer</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Length of Stay</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                    </b-card>
                  </div>

                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Self Employment">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Self Employment</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Ownership</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Business Name</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Business Line</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Capitalization</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Length of Operation</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                    </b-card>
                  </div>
                </div>

                <div class="row mt-5">
                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Other Sources">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group d-flex">
                            <label class="mr-3">1</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group d-flex">
                            <label class="mr-3">2</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group d-flex">
                            <label class="mr-3">3</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                    </b-card>
                  </div>

                  <div class="col-md-6">
                    <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Total Monthly Family Income">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Salaries</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6 mt-5 font-weight-bold">
                            <label>Expenses:</label>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Business</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Education</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Others</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Living</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Amortization / Rental</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Monthly Dispossable Income</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Electricity / Water</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-7">
                          <div class="form-group">
                            <label>Maximum Monthly Credit Limit (70%)</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Others</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                      </div>



                    </b-card>
                  </div>
                </div>
            </b-tab>

		        <!-- CI Findings-->
		        <b-tab title="CI Findings">
		        	<div class="row">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="CI Findings Based On Company Policy">
                    <div class="form-check">
                      <input class="form-check-input" type="radio">
                      <label class="form-check-label">
                        Approved
                      </label>
                    </div>

                    <div class="row">
                      <div class="col-md-7">
                        <div class="form-check">
                          <input class="form-check-input" type="radio">
                          <label class="form-check-label">
                            Disapproved, disapproved in:
                          </label>
                        </div>
                      </div>

                      <div class="col-md-5">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" value="option1">
                          <label class="form-check-label" >Character</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 offset-7">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="option1">
                            <label class="form-check-label" >Capital</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-5 offset-7">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="option1">
                            <label class="form-check-label" >Condition</label>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-5 offset-7">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="option1">
                            <label class="form-check-label" >Capacity</label>
                          </div>
                        </div>
                      </div>

                  </b-card>
                </div>
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="Action Taken">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio">
                          <label class="form-check-label">
                            Approved
                          </label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Approving Officer</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                      
                    </div>

                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio">
                          <label class="form-check-label">
                            Conditional Approved
                          </label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Date</label>
                          <date-picker v-model="date" class="d-block" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                        </div>
                      </div>
                      
                    </div>

                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio">
                          <label class="form-check-label">
                            Disapproved
                          </label>
                        </div>
                      </div>
                  </div>

                  <div class="row mt-5">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-8 offset-4">
                      <div class="form-group">
                          <label>Reviewed By:</label>
                          <input type="text" class="form-control form-control-sm">
                        <small class="form-text text-center text-muted">Finance Department</small>
                      </div>
                    </div>
                  </div>

                  </b-card>
                </div>    
              </div>

              <div class="row mt-5">
                <div class="col-md-6">
                  <b-card header-bg-variant="primary" border-variant="primary" header-text-variant="white" header="CI Recommendation">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              For Approval
                            </label>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label>Credit Investigator</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>                        
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio">
                            <label class="form-check-label">
                              For Disapproval
                            </label>
                          </div>
                        </div>

                         <div class="col-md-6">
                          <div class="form-group">
                            <label>Date</label>
                            <date-picker v-model="date" class="d-block" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                          </div>
                        </div>                        
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label>Basis of Recommendation</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>                       
                      </div>
                  </b-card>
                </div>  
              </div>

		        </b-tab>

		        <!-- Sketch -->
		        <b-tab title="Sketch">
		        	7
		        </b-tab>

		         <!-- CI Justification Approval -->
		        <b-tab title="CI Justification Approval">
		        	8
		        </b-tab>


		      </b-tabs>
		    </b-card>

		    <!-- Control buttons-->
		    <div class="text-center mb-5">
	          <b-button-group class="mt-2">
	            <b-button variant="info" class="mr-2" @click="tabIndex--">Previous</b-button>
	            <b-button variant="info" @click="tabIndex++">Next</b-button>
	          </b-button-group>
        	</div>
		</div>
</template>

<script>
	
import DatePicker from 'vue2-datepicker'

    export default {
        components: { DatePicker },
        data() {
          return {
            date: null,
            tabIndex: 0,
            dependentModal: false,
            personalReferenceModal: false,
          }
        }
    }

</script>

<style scoped>

</style>