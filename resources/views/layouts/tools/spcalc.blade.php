@extends('layouts.app', ['title' => 'Seacham Prime Calculator', 'description' => 'Use this tool to figure out how much Seacham Prime to mix for your hermit crab.'])

@section('content')
    <div class="container">
        <div class="row justify-content-center py-6">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seacham Prime Calculator</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('SPCalculator') }}">
                            @csrf
                            <div class="row">
                                <div class="col col-form-label text-center">
                                    <h5>
                                        Choose Your Cup Size (Minimum: 2 Cups [473mL])
                                    </h5>
                                    <p class="small">Tap water is recommended because it contains minerals hermit crabs need that many other options lack. Full water changes should be performed every other day with exception of Aeration, which will allow you to get away with changes every 4-5 days. Seachem prime detoxifies ammonia, nitrite, and heavy metals found in the tap water at typical concentration levels for 48 hours.</p>
                                    <p class="small">A quick way to remember this tool is to supply 1 drop of Seachem Prime to anything under 1/2 Gallon, and anything over should get 2 drops. This tool is provided to get more accurate measurements in order to save the amount of Seachem Prime that you use. To detoxify nitrite in an emergency, up to 5 times normal dose may be used.
                                    </p>
                                    <p class="small">True accurate dosing should be done by measuring the amount of nitrite, chlorine, or chloramine (in ppm) in your pools.
                                    </p>
                                    <p class="small">For more accurate and up-to-date information please see: <a href="https://seachem.zendesk.com/hc/en-us/articles/115000125454-Info-Prime-dosing-instructions" target="_blank">this page</a>.
                                    </p><strong>This calculator <em>currently</em> assumes 1ppm.</strong></p>
                                </div>
                            </div>
                            <!-- max = 5x so 1 cup = 0.6 drop max)-->
                            <!-- 1 cup = 0.125 drop -->
                            <!-- 2 cups = 0.25 drop -->
                            <!-- 4 cups = 0.5 drop -->
                            <!-- 8 cups = 1 drop -->
                            <!-- 12 cups = 1.5 drops -->
                            <!-- 16 cups = 2 drops -->

                                <div class="col-auto my-1">
                                    <label class="mr-sm-2 sr-only" for="selectml">Pool Size in Cups</label>
                                    <select class="custom-select mr-sm-2" id="selectml" name="ounces">

                                      <option selected>Choose...</option>
                                      <option value="0.473">2 Cups</option>
                                      <option value="0.710">3 Cups</option>
                                      <option value="0.946">4 Cups</option>
                                      <option value="1.183">5 Cups</option>
                                      <option value="1.420">6 Cups</option>
                                      <option value="1.656">7 Cups</option>
                                      <option value="1.893">8 Cups (1/2 Gallon)</option>
                                      <option value="2.129">9 Cups</option>
                                      <option value="2.366">10 Cups</option>
                                      <option value="2.603">11 Cups</option>
                                      <option value="2.839">12 Cups</option>
                                      <option value="3.076">13 Cups</option>
                                      <option value="3.312">14 Cups</option>
                                      <option value="3.549">15 Cups</option>
                                      <option value="3.785">16 Cups (1 Gallon)</option>
                                    </select>
                                  </div>

                            </div>
                            <button class="btn btn-accent btn-block" type="submit">Find Mixture</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
