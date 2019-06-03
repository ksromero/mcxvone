<template>
    <div class="container">
        <!-- Tabs with card integration -->
        <b-card no-body>
        <form>
          <b-tabs v-model="tabIndex" fill small justified card>
                <!-- Unit Information Tab -->
                <b-tab title="Unit Info">
                    <b-card  header-bg-variant="light" header="(ALL INFORMATION GIVEN WILL BE TREATED AS STRICTLY CONFIDENTIAL)">
                          <!-- First row -->
                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>With Agent?</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Yes/No</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>

                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label >If yes, please specify agent</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Specify agent">
                          </div> 
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                             <label >Brand new / Repo Unit</label>
                              <select class="custom-select custom-select-sm">
                                <option disabled selected>Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                          </div>
                        </div>  
                    </div>
                    <hr>
                    <!-- Second Row -->

                    <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Brand</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Brand</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Model</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Model</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label >Color</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Color</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>
                        </div>

                         <div class="col-md-3">
                          <div class="form-group">
                            <label >Total Price</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Price">
                          </div> 
                        </div>  

                    </div>
                    <hr>
                    <!-- Third Row -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Downpayment</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Downpayment">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label >Monthly Installment</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Monthly Installment">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label >Terms</label>
                            <select class="custom-select custom-select-sm">
                              <option disabled selected>Select Terms</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <b-card header="Purpose">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Public Utility / Tricycle
                                          </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <span>Is tricycle franchise open in the area?</span>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">

                                          <div class="row">
                                            <div class="col-md-6">
                                              <label class="form-check-label">
                                                Yes, where 
                                              </label>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                            
                                          </div>
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Private Use / Solo
                                          </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Utility Use 
                                          </label>
                                        </div>

                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Personal
                                          </label>
                                        </div>


                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Others, please specify
                                          </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                          <input class="form-control form-control-sm" type="text">
                                    </div>
                                </div>

                            </b-card>
                           
                        </div>

                        <div class="col-md-6">
                            <b-card header="Customer Type">
                                <div class="form-check">
                                      <input class="form-check-input" type="radio">
                                      <label class="form-check-label">
                                        New
                                      </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio">
                                          <label class="form-check-label">
                                            Repeat
                                          </label>
                                        </div>
                                    </div>

                                    <div class="col-md-8 offset-2">
                                        <div class="form-group">
                                            <label >Unit Purchased</label>
                                            <select class="custom-select custom-select-sm">
                                              <option disabled selected>Select Unit</option>
                                              <option value="yes">Yes</option>
                                              <option value="no">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label >When</label>
                                            <date-picker class="d-block" v-model="date" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                                        </div>

                                        <div class="form-group">
                                            <label>Branch</label>
                                            <select class="custom-select custom-select-sm">
                                              <option disabled selected>Select Branch</option>
                                              <option value="yes">Yes</option>
                                              <option value="no">No</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >SRP</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="SRP">
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >DP</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="DP">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >M.A.</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="SRP">
                                              </div>

                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label >Term</label>
                                                <select class="custom-select custom-select-sm">
                                                  <option disabled selected>Select Term</option>
                                                  <option value="yes">Yes</option>
                                                  <option value="no">No</option>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                         
                                    </div>

                                </div>
                                
                            </b-card>
                           
                        </div>                        
                    </div>
    

                    </b-card>
                  
                    
                </b-tab>

                <!-- Customer's Information Tab -->
                <b-tab title="Customer's Info">
                  <b-card>
                    <label>Customer's Name</label>
                    <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplication.surname" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Surname</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" v-model="customerApplication.first_name" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">First Name</small>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplication.middle_name" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Middle Name</small>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Nickname</label>
                            <input type="text" v-model="customerApplication.nickname" class="form-control form-control-sm">
                          </div>

                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Place of Birth</label>
                            <input type="text" v-model="customerApplication.place_of_birth" class="form-control form-control-sm">
                          </div>

                        </div>

                         <div class="col-md-4">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <date-picker v-model="customerApplication.date_of_birth" class="d-block" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                          </div>
                        </div>                       
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <label>Age</label>
                            <input type="number" v-model="customerApplication.age" class="form-control form-control-sm">
                          </div>          
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <label >Sex</label>
                            <select v-model="customerApplication.sex" class="custom-select custom-select-sm">
                              <option disabled selected>Select Sex</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>            
                        </div>
                       
                        <div class="col-md-2">
                          <div class="form-group">
                            <label >Status</label>
                            <select v-model="customerApplication.status" class="custom-select custom-select-sm">
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
                            <input type="text" v-model="customerApplicationAddress.no" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">No</small>
                          </div> 
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationAddress.street" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Street</small>
                          </div>

                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationAddress.barangay" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Barangay</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationAddress.municipality" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">City/Municipality</small>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationAddress.province" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Province</small>
                          </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                          <label>Length of Stay</label>
                          <div class="form-group d-flex">
                            <input type="number" v-model="lengthOfStay.yrs" class="form-control form-control-sm">
                            <small class="form-text d-block ml-1 mr-1 text-center text-muted">Yrs.</small>
                            <input type="number" v-model="lengthOfStay.mos" class="form-control form-control-sm">
                            <small class="form-text d-block ml-1 text-center text-muted">Mos.</small>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Telephone Number</label>
                            <input type="text" v-model="customerApplication.telephone_number" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" v-model="customerApplication.mobile_number" class="form-control form-control-sm">
                          </div>
                        </div>
                    </div>

                    <hr>
                    <label>Provincial Address</label>
                      <div class="row">
                        <div class="col-md-1">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationProvincialAddress.no" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">No</small>
                          </div>  
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationProvincialAddress.street" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Street</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationProvincialAddress.barangay" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Barangay</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationProvincialAddress.municipality" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">City/Municipality</small>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input type="text" v-model="customerApplicationProvincialAddress.province" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Province</small>
                          </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>House Ownership</label>
                            <select v-model="customerApplication.house_ownership" class="custom-select custom-select-sm">
                                <option disabled selected>Select Ownership</option>
                                <option value="own house">Own House</option>
                                <option value="renting">Renting</option>
                                <option value="live with parents">Live with Parents</option>
                                <option value="others">Others, please specify</option>
                            </select>
                          </div>

                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Educational Attainment</label>
                            <select v-model="customerApplication.educational_attainnment" class="custom-select custom-select-sm">
                              <option disabled selected>Select Educational Attainment</option>
                              <option value="elementary graduate">Elementary Graduate</option>
                              <option value="highschool graduate">Highschool Graduate</option>
                              <option value="college graduate">College Graduate</option>
                            </select>
                          </div>

                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>School</label>
                            <input v-model="customerApplication.school" type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Degree</label>
                            <input v-model="customerApplication.degree" type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                    </div>

                    <hr>

                    <b-card header="Spouse's Information">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Spouse's Name</label>
                            <input v-model="customerApplication.spouse_name" type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Date of Birth</label>
                            <date-picker class="d-block" v-model="customerApplication.spouse_dob" format="YYYY-MM-DD" valueType="format" lang="en" ></date-picker>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Place of Birth</label>
                            <input v-model="customerApplication.spouse_pob" type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

                    <label>Present Address</label>
                    <div class="row">
                        <div class="col-md-1">
                          <div class="form-group">
                            <input v-model="spouseAddress.no" type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">No</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input v-model="spouseAddress.street" type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Street</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input v-model="spouseAddress.barangay" type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Barangay</small>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form-group">
                            <input v-model="spouseAddress.municipality" type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">City/Municipality</small>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group">
                            <input v-model="spouseAddress.province" type="text" class="form-control form-control-sm">
                            <small class="form-text text-center text-muted">Province</small>
                          </div>
                        </div>

                    </div>

                     <div class="row">
                        <div class="col-md-4">
                          <label>Length of Stay</label>
                          <div class="form-group d-flex">
                            <input type="number" v-model="spouseLengthOfStay.yrs" class="form-control form-control-sm">
                            <small class="form-text d-block ml-1 mr-1 text-center text-muted">Yrs.</small>
                            <input type="number" v-model="spouseLengthOfStay.mos" class="form-control form-control-sm">
                            <small class="form-text d-block ml-1 text-center text-muted">Mos.</small>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Telephone Number</label>
                            <input v-model="customerApplication.spouse_telephone_number" type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label>Mobile Number</label>
                            <input v-model="customerApplication.spouse_mobile_number" type="text" class="form-control form-control-sm">
                          </div>
                        </div>

                    </div>
                    </b-card>
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
                        <template v-if="!customerApplication.dependents.length">
                          <tr>
                            <td colspan="6" class="text-center">
                              No Dependents
                            </td>
                          </tr>
                        </template>
                        <template v-else>
                          <tr v-for="(dependent,index) in customerApplication.dependents" :key="index">
                            <td>{{dependent.name}}</td>
                            <td>{{dependent.relationship}}</td>
                            <td>{{dependent.age}}</td>
                            <td>{{dependent.school}}</td>
                            <td>{{dependent.matriculation}}</td>
                          </tr>
                        </template>
                      </tbody>
                    </table>
                    <div class="text-center">
                      <button type="button" @click="openDependentModal()" class="btn btn-sm btn-primary text-center">Add Dependent</button>
                    </div>

                    </b-card>
                    <b-modal hide-footer v-model="dependentModal">
                      <div class="form-group">
                        <label>Name of Dependent</label>
                        <input v-model="dependent.name" type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Relationship</label>
                        <input v-model="dependent.relationship" type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Age</label>
                        <input v-model="dependent.age" type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Name of School</label>
                        <input v-model="dependent.school" type="text" class="form-control form-control-sm">
                      </div>

                      <div class="form-group">
                        <label>Monthly Matriculation</label>
                        <input v-model="dependent.matriculation" type="text" class="form-control form-control-sm">
                      </div>
                      <b-button type="submit" @click="addDependents()" class="float-right" pill variant="primary">Save</b-button>
                    </b-modal>
                    <!-- Dependent Modal -->
                  </b-card>               
                </b-tab>

                <!-- Source of Income Tab-->
                <b-tab title="Source of Income">
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
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Monthly Income</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Other Compensation</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Office Number</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>
                        </div>

                      <b-card header="Spouse's Employer Information">
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


                         <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Monthly Income</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Other Compensation</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Office Number</label>
                              <input type="text" class="form-control form-control-sm">
                            </div>

                          </div>
                      </div>
                      </b-card>

                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label>Total Estimated Income per Month</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>
                      <hr>

                      <div class="row">
                        <div class="col-md-6">
                             <b-card header="Other Sources of Income (Real Property)">
                              <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Real Property</th>
                                  <th scope="col">Area</th>
                                  <th scope="col">Market Value</th>
                                  <th scope="col">Encumbrence Held By</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>Otto</td>
                                </tr>
                                <tr>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                  <td>Otto</td>
                                </tr>
                              </tbody>
                            </table>

                          <div class="text-center mt-3">
                            <button type="button" @click="realPropertyModal = !realPropertyModal" class="btn btn-sm btn-primary text-center">Add</button>
                          </div>

                          <!-- Real Property Modal -->
                          <b-modal v-model="realPropertyModal">
                              <div class="form-group">
                                <label>Real Property</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                              <div class="form-group">
                                <label>Area</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                              <div class="form-group">
                                <label>Market Value</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                              <div class="form-group">
                                <label>Encumbrances Held By</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                            </b-modal>
                          </b-card>


                        </div>

                        <div class="col-md-6">
                             <b-card header="Other Sources of Income (Personal Property)">
                              <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Personal Property</th>
                                  <th scope="col">Market Value</th>
                                  <th scope="col">Encumbrence Held By</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                              </tbody>
                            </table>
                          <div class="text-center mt-3">
                            <button type="button" @click="personalPropertyModal = !personalPropertyModal" class="btn btn-sm btn-primary text-center">Add</button>
                          </div>

                          <!-- Real Property Modal -->
                          <b-modal v-model="personalPropertyModal">
                              <div class="form-group">
                                <label>Personal Property</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                              <div class="form-group">
                                <label>Market Value</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                              <div class="form-group">
                                <label>Encumbrances Held By</label>
                                <input type="text" class="form-control form-control-sm">
                              </div>

                            </b-modal>

                          </b-card>


                      
                        </div>


                      </div>
                     

                     
                    </b-card>
                </b-tab>

                <!-- Statement of Monthly Income and Expenses Tab -->
                <b-tab title="Statement of Monthly Income and Expenses">
                  <b-card>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Average Monthly Expenses</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Basic Monthly Salary</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Amortization / Rental</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Spouse's Basic Monthly Salary</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Education / Tuition</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Other Monthly Income</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Electricity / Water</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Total Monthly Income</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Other Loans</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Net Monthly Income</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Total Expenses</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                  </b-card>

                </b-tab>

                <!-- Co-Maker's Information Tab -->
                <b-tab title="Co-Maker's Info">
                    <b-card>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Co-Maker's Name</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>

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
                          
                        <div class="col-md-3">
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

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Present Address</label>
                            <input type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </div>

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

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Employer's Name</label>
                            <input type="text" class="form-control-sm form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Employer's Address</label>
                            <input type="text" class="form-control-sm form-control">
                          </div>
                        </div>
                      </div>
                    </b-card>
                </b-tab>

                <!-- Personal Reference Tab -->
                <b-tab title="Personal Reference">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Father's Name</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Telephone Number</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Mother's Name</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                       
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Telephone Number</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Brother's Name</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Telephone Number</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Sister's Name</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>           
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Telephone Number</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>            
                      </div>
                    </div>
                </b-tab>

                <!-- Referrals -->
                <b-tab title="Referrals">
                  <b-card header="Referrals">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Contact Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                       </tr>               
                      </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <button type="button" @click="referralsModal = !referralsModal" class="btn btn-sm btn-primary text-center">Add</button>
                    </div>

                    <b-modal v-model="referralsModal">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="form-group">
                          <label>Contact Number</label>
                          <input type="text" class="form-control form-control-sm">
                        </div>

                      </b-modal>

                  </b-card>
                    
                </b-tab>

                <!-- Sketch -->
                <b-tab title="Sketch">
                    Sketch
                </b-tab>

                <!-- Remarks -->
                <b-tab title="Remarks">
                  <vue-editor v-model="content"></vue-editor>
                </b-tab>

                <!-- Acknowledgement -->
                <b-tab title="Acknowledgement">
                    <b-card>
                      <div class="text-center">
                        By, clicking FINISH, I certify that all information given above are true and
                        correct to the best of my knowledge.<br> The above information is given for the purpose of obtaining credit and hereby <br> authorizes CYCLEMALL, INC. to obtain information concerning any statement made herein
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            
                          </div>
                          <label >Date</label>
                          <date-picker v-model="date" format="YYYY-MM-DD" class="d-block" valueType="format" lang="en" ></date-picker>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label >Res. Cert. No.</label>
                            <input type="text" class="form-control-sm form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label >Issued At</label>
                            <input type="text" class="form-control-sm form-control">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label >Date</label>
                            <date-picker v-model="date" format="YYYY-MM-DD" class="d-block" valueType="format" lang="en" ></date-picker>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 offset-4">
                          <div class="form-group">
                            <label >TIN No.</label>
                            <input type="text" class="form-control-sm form-control">
                          </div>
                        </div>
                      </div>

                    </b-card>
                </b-tab>
          </b-tabs>
        </form>
        </b-card>

        <!-- Control buttons-->
        <div class="text-center mb-5">
          <b-button-group class="mt-2">
            <b-button variant="info" class="mr-2" @click="tabIndex--">Previous</b-button>
            <b-button v-if="tabIndex == 9" variant="info" @click="saveCustomerApplication()">Finish</b-button>
            <b-button v-else variant="info" @click="tabIndex++">Next</b-button>

          </b-button-group>
        </div>
    </div>
</template>

<script>
import { Editor } from 'tiptap'
import DatePicker from 'vue2-datepicker'
import { VueEditor } from "vue2-editor";

    export default {
        components: { DatePicker, VueEditor },
        data() {
          return {
            date: null,
            tabIndex: 0,
            dependentModal: false,
            realPropertyModal: false,
            personalPropertyModal: false,
            referralsModal:false,
            content:'',
            dependentEdit:false,
            dependent: {
              name: '',
              relationship: '',
              age: '',
              school: '',
              matriculation: ''
            },
            lengthOfStay:{
                yrs: '0',
                mos: '0'
            },
            customerApplicationAddress: {
              no: '',
              street: '',
              barangay: '',
              municipality: '',
              province: '',
            },
            customerApplicationProvincialAddress: {
              no: '',
              street: '',
              barangay: '',
              municipality: '',
              province: '',
            },
            spouseAddress: {
              no: '',
              street: '',
              barangay: '',
              municipality: '',
              province: '',
            },
            spouseLengthOfStay: {
              yrs: '0',
              mos: '0'
            },
            customerApplication: {
              surname: null,
              first_name: null,
              middle_name: null,
              nickname: null,
              place_of_birth: null,
              date_of_birth: null,
              address: this.customerPresentAddress,
              age: null,
              sex: null,
              status: null,
              length_of_stay: this.lengthOfStayYrsMos,
              telephone_number: null,
              mobile_number: null,
              provincial_address: this.customerProvincialAddress,
              house_ownership: null,
              educational_attainnment: null,
              school: null,
              degree: null,
              spouse_name: null,
              spouse_dob: null,
              spouse_pob: null,
              spouse_address: this.customerSpouseAddress,
              spouse_length_of_stay: this.spouseLengthOfStayYrsMos,
              spouse_telephone_number: null,
              spouse_mobile_number: null,
              dependents: []
            },
          }
        },
        computed: {
          customerPresentAddress(){
          return this.customerApplication.address = Object.values(this.customerApplicationAddress).join(" ")
          },
          customerProvincialAddress(){
          return this.customerApplication.provincial_address = Object.values(this.customerApplicationProvincialAddress).join(" ")
          },
          lengthOfStayYrsMos(){
          this.customerApplication.length_of_stay = Object.keys(this.lengthOfStay).map(k =>  {
              return `${this.lengthOfStay[k]} ${k}.` 
              }).join(" & ")
          },
          customerSpouseAddress(){
            return this.customerApplication.spouse_address = Object.values(this.spouseAddress).join(" ")
          },
          spouseLengthOfStayYrsMos(){
            this.customerApplication.spouse_length_of_stay = Object.keys(this.spouseLengthOfStay).map(k =>  {
              return `${this.spouseLengthOfStay[k]} ${k}.` 
              }).join(" & ")
          },
        },
        watch: {
          openDependentModal(){
            if(this.dependentModal == false){
              this.dependent = {}
            }
          }
        },
        methods: {
          addDependents(){
            this.customerApplication.dependents.push(this.dependent)
            this.dependent = {}
            this.openDependentModal()
          },
          openDependentModal(){
            this.dependentModal = !this.dependentModal
          },
          saveCustomerApplication(){
            axios.post('api/customer-application', this.customerApplication)
            .then( response => {
              this.customerApplication = {}
            })
            .catch( error => {
              console.log(error)
            })
          }
        }

    }
</script>

<style scoped>
    .form-inline > * {
        margin:2px 1px;
    }

</style>