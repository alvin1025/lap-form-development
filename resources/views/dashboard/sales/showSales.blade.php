@extends('dashboard.layouts.main')

@section('title', 'Show Form Development Request')

@section('content')
    {{-- <form action="/dashboard/sales" method="post"> --}}
    {{-- @csrf --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h2 text-center">FORM DEVELOPMENT REQUEST(SALES)</h3>
        <a href="/export-pdf-sales" class="btn btn-success"><span data-feather="printer"></span></a>
    </div>
    <div class="row justify-content-center">
        <div class="d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="row">
                    <input type="hidden" name="form_request_development_id">
                    <label class="col-sm-4 col-form-label my-2">NO</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->no }}
                    </div>
                    <label class="col-sm-4 col-form-label my-2">DATE</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->date }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">NAME</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->name }}
                    </div>
                    <label class="col-sm-4 col-form-label my-2">CUSTOMER</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->customer }}
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">OPPORTUNITY ORDER</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->opportunity_order }}
                    </div>
                    <label class="col-sm-4 col-form-label my-2">TARGET DATE</label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->target_date }}
                    </div>
                    <hr class="mt-2">
                </div>
                <div class="row">
                    <label class="col-sm-4 col-form-label my-2">PURPOSE </label>
                    <div class="col-sm-7 my-2">
                        {{ $sales->purpose }}
                    </div>
                    <hr class="mt-4">
                </div>
                <div class="row">
                    <div class="col-sm-2 my-2">
                        <label for="">DETAILS</label>
                    </div>
                    <div class="col-sm-10 mt-4">
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">ARTICLE CODE</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" onclick="hideShowDiv(1)"/>
                    <label class="form-check-label" for="inlineRadio1">YES</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" onclick="hideShowDiv(2)" value="Null"/>
                    <label class="form-check-label" for="inlineRadio2">NO</label>
                  </div> --}}
                                {{ $sales->article_code }}
                            </div>
                            {{-- <div class="col-sm-4 " id="show">
              <input type="text" class="form-control my-2" name="article_code"/>
            </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">WIDTH</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Greige" name="width">
                <label class="form-check-label" for="inlineCheckbox1">GREIGE</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Finish" name="width">
                <label class="form-check-label" for="inlineCheckbox2">FINISH</label>
              </div> --}}
                                {{ $sales->width }} | {{ $sales->width_value }}
                            </div>
                            {{-- <div class="col-sm-3 ">
              <input type="text" class="form-control my-2" name="width_value"/>
            </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">SAMPLE</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="YES" name="sample">
                <label class="form-check-label" for="inlineCheckbox1">YES</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="NO" name="sample">
                <label class="form-check-label" for="inlineCheckbox2">NO</label>
              </div> --}}
                                {{ $sales->sample }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">HANDFEEL TARGET</label>
                            <div class="col-sm-4 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="YES" name="handfeel_target"/>
                    <label class="form-check-label" for="inlineRadio1">YES</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="NO" name="handfeel_target"/>
                    <label class="form-check-label" for="inlineRadio2">NO</label>
                  </div> --}}
                                {{ $sales->handfeel_target }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">END USE</label>
                            <div class="col-sm-8 ">
                                {{-- <input type="text" class="form-control my-2" name="end_use"/> --}}
                                {{ $sales->end_use }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">REQUEST DESIGN</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="3" onclick="hideShowDiv(3)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="4" onclick="hideShowDiv(4)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                {{ $sales->request_design }}
                            </div>
                            {{-- <div class="col-sm-4 " id="rd">
                <input type="text" class="form-control my-2" name="request_design"/>
              </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">REQUEST COLOR</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="5" onclick="hideShowDiv(5)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="6" onclick="hideShowDiv(6)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                {{ $sales->request_color }}
                            </div>
                            {{-- <div class="col-sm-4 " id="rc">
                <input type="text" class="form-control my-2" name="request_color"/>
              </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">SPECIAL FINISH</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="7" onclick="hideShowDiv(7)"/>
                      <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="8" onclick="hideShowDiv(8)"/>
                      <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div> --}}
                                {{ $sales->special_finish }}
                            </div>
                            {{-- <div class="col-sm-4 " id="sf">
                <input type="text" class="form-control my-2" name="special_finish"/>
              </div> --}}
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">SHRINGKAGE</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio1" value="A"/>
                    <label class="form-check-label" for="inlineRadio1">A</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="shrinkage" id="inlineRadio2" value="B"/>
                    <label class="form-check-label" for="inlineRadio2">B</label>
                  </div> --}}
                                {{ $sales->shrinkage }}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">SAMPLE NEEDED</label>
                            <div class="col-sm-8 ">
                                {{-- <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <small><label class="form-check-label" for="inlineCheckbox1">HANGER</label></small>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <small><label class="form-check-label " for="inlineCheckbox2">YARDAGE</label></small>
                </div> --}}
                                {{ $sales->sample_needed }}
                            </div>
                            <div class="col-sm-4 ">
                                {{-- <input type="text" class="form-control my-2" name="sample_needed_value"/> --}}
                                {{ $sales->sample_needed_value }}
                            </div>
                        </div>

                        <div class="input-group mb-3 row">
                            <label class="col-sm-4 col-form-label my-2">Status</label>
                            {{-- <select class="form-select" id="inputGroupSelect01">
                <option value="Waiting Approval" selected>Waiting Approval</option>
                <option value="Send To Marketing">Send To Marketing</option>
              </select> --}}
                            {{ $sales->status }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                {{-- <textarea type="text" class="form-control mb-3 my-2 mx-2" placeholder="ADDITIONAL INFORMATION :" rows="13" cols="5" name="note"></textarea> --}}
                {{ $sales->note }}
            </div>
        </div>

        {{-- <div class="d-flex justify-content-end mb-5">
  <div class="col-sm-1">
      <button type="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</div> --}}
        {{-- </form>

<script>
      function hideShowDiv(val){
          if(val==1) {
              document.getElementById('show').style.display='block';
          }if(val==2) {
            document.getElementById('show').style.display='none';
          }if (val==3) {
            document.getElementById('rd').style.display='block';
          }if (val==4) {
            document.getElementById('rd').style.display='none';            
          }if (val==5) {
            document.getElementById('rc').style.display='block';
          }if (val==6) {
            document.getElementById('rc').style.display='none';
          }if (val==7) {
            document.getElementById('sf').style.display='block';
          }if (val==8) {
            document.getElementById('sf').style.display='none';
          }
      }
</script> --}}
    @endsection

    <script>
        function printme() {
            window.print();
        }
    </script>
