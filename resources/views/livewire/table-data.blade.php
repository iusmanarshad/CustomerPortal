@extends('layouts.app')

@section('styles')

@endsection

@section('content')

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">DATA TABLES</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb breadcrumb-style3">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data tables</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom" id="basicDataTable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Medric Belly</td>
													<td>Javascript Developer</td>
													<td>Eden Gards</td>
													<td>25</td>
													<td>$133,060</td>
												</tr>
												<tr>
													<td>Ayri Satovu</td>
													<td>Senior Engineer</td>
													<td>Elitr stet</td>
													<td>25</td>
													<td>$262,700</td>
												</tr>
												<tr>
													<td>Billie William</td>
													<td>Software Engineer</td>
													<td>Paris</td>
													<td>52</td>
													<td>$472,000</td>
												</tr>
												<tr>
													<td>Merrod Sailor</td>
													<td>Sales Assosiative</td>
													<td>Sydney</td>
													<td>35</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Khona David</td>
													<td>DBMS Engineer</td>
													<td>France</td>
													<td>25</td>
													<td>$427,900</td>
												</tr>
												<tr>
													<td>Coolio Hornet</td>
													<td>Angular Developer</td>
													<td>Stet stet</td>
													<td>39</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonia Fraust</td>
													<td>Software Developer</td>
													<td>Magna lorem</td>
													<td>32</td>
													<td>$303,600</td>
												</tr>
												<tr>
													<td>Jennie Lora</td>
													<td>Bank Manager</td>
													<td>UK</td>
													<td>45</td>
													<td>$590,560</td>
												</tr>
												<tr>
													<td>Flynn Hank</td>
													<td>Cloud Developer</td>
													<td>Mexico</td>
													<td>25</td>
													<td>$442,000</td>
												</tr>
												<tr>
													<td>Ricky Martin</td>
													<td>React Developer</td>
													<td>Sed sit</td>
													<td>48</td>
													<td>$870,600</td>
												</tr>
												<tr>
													<td>Halsey Kep</td>
													<td>Marketing Executive</td>
													<td>Takimata sit</td>
													<td>26</td>
													<td>$513,500</td>
												</tr>
												<tr>
													<td>Alaric Saltzman</td>
													<td>History Teacher</td>
													<td>Mystic Falls</td>
													<td>32</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Katherina Kat</td>
													<td>Event Planner</td>
													<td>Accusam est</td>
													<td>57</td>
													<td>$98,500</td>
												</tr>
												<tr>
													<td>Paulson Pal</td>
													<td>Data Analyst</td>
													<td>Manchester</td>
													<td>23</td>
													<td>$325,000</td>
												</tr>
												<tr>
													<td>Glory Sam</td>
													<td>System Administrator</td>
													<td>Sit Invidunt</td>
													<td>32</td>
													<td>$337,500</td>
												</tr>
												<tr>
													<td>Bradley Cooper</td>
													<td>Civil Engineer</td>
													<td>Aliquyam</td>
													<td>26</td>
													<td>$332,000</td>
												</tr>
												<tr>
													<td>Keera Dsoa</td>
													<td>Cloud Developer</td>
													<td>Sylvia</td>
													<td>53</td>
													<td>$717,500</td>
												</tr>
												<tr>
													<td>Alia Max</td>
													<td>Project Manager</td>
													<td>Old York</td>
													<td>26</td>
													<td>$435,000</td>
												</tr>
												<tr>
													<td>Yuri Gagarin</td>
													<td>Data Scientist</td>
													<td>Sun</td>
													<td>42</td>
													<td>$989,900</td>
												</tr>
												<tr>
													<td>Cisaro Pals</td>
													<td>Sales Executive</td>
													<td>Kambodia</td>
													<td>25</td>
													<td>$706,450</td>
												</tr>
												<tr>
													<td>Amberson Pet</td>
													<td>Sales Manager</td>
													<td>Kidney</td>
													<td>25</td>
													<td>$185,600</td>
												</tr>
												<tr>
													<td>peter Parker</td>
													<td>Piolet</td>
													<td>Web Spal</td>
													<td>24</td>
													<td>$900,000</td>
												</tr>
												<tr>
													<td>Balvin Joy</td>
													<td>Junior Developer</td>
													<td>Edin Gaurds</td>
													<td>24</td>
													<td>$29,575</td>
												</tr>
												<tr>
													<td>Chang Jennifer</td>
													<td>Assistant Manager</td>
													<td>Maldives</td>
													<td>28</td>
													<td>$457,650</td>
												</tr>
												<tr>
													<td>Brandon Alex</td>
													<td>Senior Software Engineer</td>
													<td>Seiros</td>
													<td>36</td>
													<td>$406,850</td>
												</tr>
												<tr>
													<td>Folia Green</td>
													<td>Bank Officer</td>
													<td>Et Dolores</td>
													<td>41</td>
													<td>$580,000</td>
												</tr>
												<tr>
													<td>Showtek Taylor</td>
													<td>Chief Executive</td>
													<td>Moscow</td>
													<td>25</td>
													<td>$463,000</td>
												</tr>
												<tr>
													<td>Michelle Mars</td>
													<td>Event Planner</td>
													<td>Helsinki</td>
													<td>41</td>
													<td>$195,400</td>
												</tr>
												<tr>
													<td>Suki Bahva</td>
													<td>Marketing Manager</td>
													<td>Singapore</td>
													<td>24</td>
													<td>$214,500</td>
												</tr>
												<tr>
													<td>Scarlett Johnson</td>
													<td>Lab Assistant</td>
													<td>Asgaurd</td>
													<td>21</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Javin Cortez</td>
													<td>Junior Lecturer</td>
													<td>Erat Diam</td>
													<td>28</td>
													<td>$325,500</td>
												</tr>
												<tr>
													<td>Corey Mantena</td>
													<td>Sales Admin</td>
													<td>Invidunt Diam</td>
													<td>64</td>
													<td>$224,050</td>
												</tr>
												<tr>
													<td>Cap Messi</td>
													<td>Architecture</td>
													<td>Erat Et</td>
													<td>61</td>
													<td>$89,675</td>
												</tr>
												<tr>
													<td>Goblin Hatfield</td>
													<td>Tax Officer</td>
													<td>Spain</td>
													<td>31</td>
													<td>$64,500</td>
												</tr>
												<tr>
													<td>Robert Schrader</td>
													<td>DEO Agent</td>
													<td>Mexico</td>
													<td>45</td>
													<td>$19,850</td>
												</tr>
												<tr>
													<td>Sivian Harrell</td>
													<td>Finance Manager</td>
													<td>Diam Consetetur</td>
													<td>26</td>
													<td>$542,500</td>
												</tr>
												<tr>
													<td>Socn Mooney</td>
													<td>Office Executive</td>
													<td>London</td>
													<td>37</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Fairy Tales</td>
													<td>Bank Manager</td>
													<td>Shangai</td>
													<td>56</td>
													<td>$465,750</td>
												</tr>
												<tr>
													<td>Olivia Mars</td>
													<td>Assistant Engineer</td>
													<td>Sanctus No</td>
													<td>25</td>
													<td>$334,500</td>
												</tr>
												<tr>
													<td>Bruno Jupiter</td>
													<td>Software Developer</td>
													<td>Maldives</td>
													<td>36</td>
													<td>$613,500</td>
												</tr>
												<tr>
													<td>Saina Agacy</td>
													<td>Team Leader</td>
													<td>Berlin</td>
													<td>31</td>
													<td>$319,575</td>
												</tr>
												<tr>
													<td>Vurumula Dootha</td>
													<td>Human Resource Manager</td>
													<td>Sin City</td>
													<td>21</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Hank Flynn</td>
													<td>Chief Executive</td>
													<td>Amet Accusam</td>
													<td>42</td>
													<td>$187,500</td>
												</tr>
												<tr>
													<td>Stark Mahva</td>
													<td>Senior Technitian</td>
													<td>Florida</td>
													<td>42</td>
													<td>$148,575</td>
												</tr>
												<tr>
													<td>Kappa Alien</td>
													<td>Software Engineer</td>
													<td>Old Town</td>
													<td>36</td>
													<td>$215,250</td>
												</tr>
												<tr>
													<td>Zara Lorson</td>
													<td>AWS Developer</td>
													<td>Voluptua Ea</td>
													<td>21</td>
													<td>$15,000</td>
												</tr>
												<tr>
													<td>Skatie Jaow</td>
													<td>Cheif Marketing Executive</td>
													<td>Consetetur Sed</td>
													<td>31</td>
													<td>$57,650</td>
												</tr>
												<tr>
													<td>Stevens Karra</td>
													<td>Junior Promoter</td>
													<td>Vero Consetetur</td>
													<td>23</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Fermi Butler</td>
													<td>Bank Manager</td>
													<td>Et et</td>
													<td>41</td>
													<td>$56,250</td>
												</tr>
												<tr>
													<td>Ben Tennyson</td>
													<td>System Administrator</td>
													<td>Vero Et</td>
													<td>22</td>
													<td>$13,500</td>
												</tr>
												<tr>
													<td>Sishya Charee</td>
													<td>Professor</td>
													<td>Sea Lorem</td>
													<td>25</td>
													<td>$68,500</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Responsive DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive ">
											<table class="table table-bordered text-nowrap border-bottom" id="responsiveDataTable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Medric Belly</td>
													<td>Javascript Developer</td>
													<td>Eden Gards</td>
													<td>25</td>
													<td>$133,060</td>
												</tr>
												<tr>
													<td>Ayri Satovu</td>
													<td>Senior Engineer</td>
													<td>Elitr stet</td>
													<td>25</td>
													<td>$262,700</td>
												</tr>
												<tr>
													<td>Billie William</td>
													<td>Software Engineer</td>
													<td>Paris</td>
													<td>52</td>
													<td>$472,000</td>
												</tr>
												<tr>
													<td>Merrod Sailor</td>
													<td>Sales Assosiative</td>
													<td>Sydney</td>
													<td>35</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Khona David</td>
													<td>DBMS Engineer</td>
													<td>France</td>
													<td>25</td>
													<td>$427,900</td>
												</tr>
												<tr>
													<td>Coolio Hornet</td>
													<td>Angular Developer</td>
													<td>Stet stet</td>
													<td>39</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonia Fraust</td>
													<td>Software Developer</td>
													<td>Magna lorem</td>
													<td>32</td>
													<td>$303,600</td>
												</tr>
												<tr>
													<td>Jennie Lora</td>
													<td>Bank Manager</td>
													<td>UK</td>
													<td>45</td>
													<td>$590,560</td>
												</tr>
												<tr>
													<td>Flynn Hank</td>
													<td>Cloud Developer</td>
													<td>Mexico</td>
													<td>25</td>
													<td>$442,000</td>
												</tr>
												<tr>
													<td>Ricky Martin</td>
													<td>React Developer</td>
													<td>Sed sit</td>
													<td>48</td>
													<td>$870,600</td>
												</tr>
												<tr>
													<td>Halsey Kep</td>
													<td>Marketing Executive</td>
													<td>Takimata sit</td>
													<td>26</td>
													<td>$513,500</td>
												</tr>
												<tr>
													<td>Alaric Saltzman</td>
													<td>History Teacher</td>
													<td>Mystic Falls</td>
													<td>32</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Katherina Kat</td>
													<td>Event Planner</td>
													<td>Accusam est</td>
													<td>57</td>
													<td>$98,500</td>
												</tr>
												<tr>
													<td>Paulson Pal</td>
													<td>Data Analyst</td>
													<td>Manchester</td>
													<td>23</td>
													<td>$325,000</td>
												</tr>
												<tr>
													<td>Glory Sam</td>
													<td>System Administrator</td>
													<td>Sit Invidunt</td>
													<td>32</td>
													<td>$337,500</td>
												</tr>
												<tr>
													<td>Bradley Cooper</td>
													<td>Civil Engineer</td>
													<td>Aliquyam</td>
													<td>26</td>
													<td>$332,000</td>
												</tr>
												<tr>
													<td>Keera Dsoa</td>
													<td>Cloud Developer</td>
													<td>Sylvia</td>
													<td>53</td>
													<td>$717,500</td>
												</tr>
												<tr>
													<td>Alia Max</td>
													<td>Project Manager</td>
													<td>Old York</td>
													<td>26</td>
													<td>$435,000</td>
												</tr>
												<tr>
													<td>Yuri Gagarin</td>
													<td>Data Scientist</td>
													<td>Sun</td>
													<td>42</td>
													<td>$989,900</td>
												</tr>
												<tr>
													<td>Cisaro Pals</td>
													<td>Sales Executive</td>
													<td>Kambodia</td>
													<td>25</td>
													<td>$706,450</td>
												</tr>
												<tr>
													<td>Amberson Pet</td>
													<td>Sales Manager</td>
													<td>Kidney</td>
													<td>25</td>
													<td>$185,600</td>
												</tr>
												<tr>
													<td>peter Parker</td>
													<td>Piolet</td>
													<td>Web Spal</td>
													<td>24</td>
													<td>$900,000</td>
												</tr>
												<tr>
													<td>Balvin Joy</td>
													<td>Junior Developer</td>
													<td>Edin Gaurds</td>
													<td>24</td>
													<td>$29,575</td>
												</tr>
												<tr>
													<td>Chang Jennifer</td>
													<td>Assistant Manager</td>
													<td>Maldives</td>
													<td>28</td>
													<td>$457,650</td>
												</tr>
												<tr>
													<td>Brandon Alex</td>
													<td>Senior Software Engineer</td>
													<td>Seiros</td>
													<td>36</td>
													<td>$406,850</td>
												</tr>
												<tr>
													<td>Folia Green</td>
													<td>Bank Officer</td>
													<td>Et Dolores</td>
													<td>41</td>
													<td>$580,000</td>
												</tr>
												<tr>
													<td>Showtek Taylor</td>
													<td>Chief Executive</td>
													<td>Moscow</td>
													<td>25</td>
													<td>$463,000</td>
												</tr>
												<tr>
													<td>Michelle Mars</td>
													<td>Event Planner</td>
													<td>Helsinki</td>
													<td>41</td>
													<td>$195,400</td>
												</tr>
												<tr>
													<td>Suki Bahva</td>
													<td>Marketing Manager</td>
													<td>Singapore</td>
													<td>24</td>
													<td>$214,500</td>
												</tr>
												<tr>
													<td>Scarlett Johnson</td>
													<td>Lab Assistant</td>
													<td>Asgaurd</td>
													<td>21</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Javin Cortez</td>
													<td>Junior Lecturer</td>
													<td>Erat Diam</td>
													<td>28</td>
													<td>$325,500</td>
												</tr>
												<tr>
													<td>Corey Mantena</td>
													<td>Sales Admin</td>
													<td>Invidunt Diam</td>
													<td>64</td>
													<td>$224,050</td>
												</tr>
												<tr>
													<td>Cap Messi</td>
													<td>Architecture</td>
													<td>Erat Et</td>
													<td>61</td>
													<td>$89,675</td>
												</tr>
												<tr>
													<td>Goblin Hatfield</td>
													<td>Tax Officer</td>
													<td>Spain</td>
													<td>31</td>
													<td>$64,500</td>
												</tr>
												<tr>
													<td>Robert Schrader</td>
													<td>DEO Agent</td>
													<td>Mexico</td>
													<td>45</td>
													<td>$19,850</td>
												</tr>
												<tr>
													<td>Sivian Harrell</td>
													<td>Finance Manager</td>
													<td>Diam Consetetur</td>
													<td>26</td>
													<td>$542,500</td>
												</tr>
												<tr>
													<td>Socn Mooney</td>
													<td>Office Executive</td>
													<td>London</td>
													<td>37</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Fairy Tales</td>
													<td>Bank Manager</td>
													<td>Shangai</td>
													<td>56</td>
													<td>$465,750</td>
												</tr>
												<tr>
													<td>Olivia Mars</td>
													<td>Assistant Engineer</td>
													<td>Sanctus No</td>
													<td>25</td>
													<td>$334,500</td>
												</tr>
												<tr>
													<td>Bruno Jupiter</td>
													<td>Software Developer</td>
													<td>Maldives</td>
													<td>36</td>
													<td>$613,500</td>
												</tr>
												<tr>
													<td>Saina Agacy</td>
													<td>Team Leader</td>
													<td>Berlin</td>
													<td>31</td>
													<td>$319,575</td>
												</tr>
												<tr>
													<td>Vurumula Dootha</td>
													<td>Human Resource Manager</td>
													<td>Sin City</td>
													<td>21</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Hank Flynn</td>
													<td>Chief Executive</td>
													<td>Amet Accusam</td>
													<td>42</td>
													<td>$187,500</td>
												</tr>
												<tr>
													<td>Stark Mahva</td>
													<td>Senior Technitian</td>
													<td>Florida</td>
													<td>42</td>
													<td>$148,575</td>
												</tr>
												<tr>
													<td>Kappa Alien</td>
													<td>Software Engineer</td>
													<td>Old Town</td>
													<td>36</td>
													<td>$215,250</td>
												</tr>
												<tr>
													<td>Zara Lorson</td>
													<td>AWS Developer</td>
													<td>Voluptua Ea</td>
													<td>21</td>
													<td>$15,000</td>
												</tr>
												<tr>
													<td>Skatie Jaow</td>
													<td>Cheif Marketing Executive</td>
													<td>Consetetur Sed</td>
													<td>31</td>
													<td>$57,650</td>
												</tr>
												<tr>
													<td>Stevens Karra</td>
													<td>Junior Promoter</td>
													<td>Vero Consetetur</td>
													<td>23</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Fermi Butler</td>
													<td>Bank Manager</td>
													<td>Et et</td>
													<td>41</td>
													<td>$56,250</td>
												</tr>
												<tr>
													<td>Ben Tennyson</td>
													<td>System Administrator</td>
													<td>Vero Et</td>
													<td>22</td>
													<td>$13,500</td>
												</tr>
												<tr>
													<td>Sishya Charee</td>
													<td>Professor</td>
													<td>Sea Lorem</td>
													<td>25</td>
													<td>$68,500</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Modal DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive ">
											<table class="table table-bordered text-nowrap border-bottom" id="modalDataTable">
											<thead>
												<tr>
													<th class="wd-20p">Name</th>
													<th class="wd-25p">Position</th>
													<th class="wd-20p">Office</th>
													<th class="wd-15p">Age</th>
													<th class="wd-20p">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Jackson</td>
													<td>System Designer</td>
													<td>Sed at</td>
													<td>41</td>
													<td>$520,800</td>
												</tr>
												<tr>
													<td>Vadett Summers</td>
													<td>UI Developer</td>
													<td>Japan</td>
													<td>28</td>
													<td>$270,750</td>
												</tr>
												<tr>
													<td>Lisbon Mox</td>
													<td>Junior Lecturer</td>
													<td>San Deigo</td>
													<td>45</td>
													<td>$286,000</td>
												</tr>
												<tr>
													<td>Medric Belly</td>
													<td>Javascript Developer</td>
													<td>Eden Gards</td>
													<td>25</td>
													<td>$133,060</td>
												</tr>
												<tr>
													<td>Ayri Satovu</td>
													<td>Senior Engineer</td>
													<td>Elitr stet</td>
													<td>25</td>
													<td>$262,700</td>
												</tr>
												<tr>
													<td>Billie William</td>
													<td>Software Engineer</td>
													<td>Paris</td>
													<td>52</td>
													<td>$472,000</td>
												</tr>
												<tr>
													<td>Merrod Sailor</td>
													<td>Sales Assosiative</td>
													<td>Sydney</td>
													<td>35</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Khona David</td>
													<td>DBMS Engineer</td>
													<td>France</td>
													<td>25</td>
													<td>$427,900</td>
												</tr>
												<tr>
													<td>Coolio Hornet</td>
													<td>Angular Developer</td>
													<td>Stet stet</td>
													<td>39</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonia Fraust</td>
													<td>Software Developer</td>
													<td>Magna lorem</td>
													<td>32</td>
													<td>$303,600</td>
												</tr>
												<tr>
													<td>Jennie Lora</td>
													<td>Bank Manager</td>
													<td>UK</td>
													<td>45</td>
													<td>$590,560</td>
												</tr>
												<tr>
													<td>Flynn Hank</td>
													<td>Cloud Developer</td>
													<td>Mexico</td>
													<td>25</td>
													<td>$442,000</td>
												</tr>
												<tr>
													<td>Ricky Martin</td>
													<td>React Developer</td>
													<td>Sed sit</td>
													<td>48</td>
													<td>$870,600</td>
												</tr>
												<tr>
													<td>Halsey Kep</td>
													<td>Marketing Executive</td>
													<td>Takimata sit</td>
													<td>26</td>
													<td>$513,500</td>
												</tr>
												<tr>
													<td>Alaric Saltzman</td>
													<td>History Teacher</td>
													<td>Mystic Falls</td>
													<td>32</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Katherina Kat</td>
													<td>Event Planner</td>
													<td>Accusam est</td>
													<td>57</td>
													<td>$98,500</td>
												</tr>
												<tr>
													<td>Paulson Pal</td>
													<td>Data Analyst</td>
													<td>Manchester</td>
													<td>23</td>
													<td>$325,000</td>
												</tr>
												<tr>
													<td>Glory Sam</td>
													<td>System Administrator</td>
													<td>Sit Invidunt</td>
													<td>32</td>
													<td>$337,500</td>
												</tr>
												<tr>
													<td>Bradley Cooper</td>
													<td>Civil Engineer</td>
													<td>Aliquyam</td>
													<td>26</td>
													<td>$332,000</td>
												</tr>
												<tr>
													<td>Keera Dsoa</td>
													<td>Cloud Developer</td>
													<td>Sylvia</td>
													<td>53</td>
													<td>$717,500</td>
												</tr>
												<tr>
													<td>Alia Max</td>
													<td>Project Manager</td>
													<td>Old York</td>
													<td>26</td>
													<td>$435,000</td>
												</tr>
												<tr>
													<td>Yuri Gagarin</td>
													<td>Data Scientist</td>
													<td>Sun</td>
													<td>42</td>
													<td>$989,900</td>
												</tr>
												<tr>
													<td>Cisaro Pals</td>
													<td>Sales Executive</td>
													<td>Kambodia</td>
													<td>25</td>
													<td>$706,450</td>
												</tr>
												<tr>
													<td>Amberson Pet</td>
													<td>Sales Manager</td>
													<td>Kidney</td>
													<td>25</td>
													<td>$185,600</td>
												</tr>
												<tr>
													<td>peter Parker</td>
													<td>Piolet</td>
													<td>Web Spal</td>
													<td>24</td>
													<td>$900,000</td>
												</tr>
												<tr>
													<td>Balvin Joy</td>
													<td>Junior Developer</td>
													<td>Edin Gaurds</td>
													<td>24</td>
													<td>$29,575</td>
												</tr>
												<tr>
													<td>Chang Jennifer</td>
													<td>Assistant Manager</td>
													<td>Maldives</td>
													<td>28</td>
													<td>$457,650</td>
												</tr>
												<tr>
													<td>Brandon Alex</td>
													<td>Senior Software Engineer</td>
													<td>Seiros</td>
													<td>36</td>
													<td>$406,850</td>
												</tr>
												<tr>
													<td>Folia Green</td>
													<td>Bank Officer</td>
													<td>Et Dolores</td>
													<td>41</td>
													<td>$580,000</td>
												</tr>
												<tr>
													<td>Showtek Taylor</td>
													<td>Chief Executive</td>
													<td>Moscow</td>
													<td>25</td>
													<td>$463,000</td>
												</tr>
												<tr>
													<td>Michelle Mars</td>
													<td>Event Planner</td>
													<td>Helsinki</td>
													<td>41</td>
													<td>$195,400</td>
												</tr>
												<tr>
													<td>Suki Bahva</td>
													<td>Marketing Manager</td>
													<td>Singapore</td>
													<td>24</td>
													<td>$214,500</td>
												</tr>
												<tr>
													<td>Scarlett Johnson</td>
													<td>Lab Assistant</td>
													<td>Asgaurd</td>
													<td>21</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Javin Cortez</td>
													<td>Junior Lecturer</td>
													<td>Erat Diam</td>
													<td>28</td>
													<td>$325,500</td>
												</tr>
												<tr>
													<td>Corey Mantena</td>
													<td>Sales Admin</td>
													<td>Invidunt Diam</td>
													<td>64</td>
													<td>$224,050</td>
												</tr>
												<tr>
													<td>Cap Messi</td>
													<td>Architecture</td>
													<td>Erat Et</td>
													<td>61</td>
													<td>$89,675</td>
												</tr>
												<tr>
													<td>Goblin Hatfield</td>
													<td>Tax Officer</td>
													<td>Spain</td>
													<td>31</td>
													<td>$64,500</td>
												</tr>
												<tr>
													<td>Robert Schrader</td>
													<td>DEO Agent</td>
													<td>Mexico</td>
													<td>45</td>
													<td>$19,850</td>
												</tr>
												<tr>
													<td>Sivian Harrell</td>
													<td>Finance Manager</td>
													<td>Diam Consetetur</td>
													<td>26</td>
													<td>$542,500</td>
												</tr>
												<tr>
													<td>Socn Mooney</td>
													<td>Office Executive</td>
													<td>London</td>
													<td>37</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Fairy Tales</td>
													<td>Bank Manager</td>
													<td>Shangai</td>
													<td>56</td>
													<td>$465,750</td>
												</tr>
												<tr>
													<td>Olivia Mars</td>
													<td>Assistant Engineer</td>
													<td>Sanctus No</td>
													<td>25</td>
													<td>$334,500</td>
												</tr>
												<tr>
													<td>Bruno Jupiter</td>
													<td>Software Developer</td>
													<td>Maldives</td>
													<td>36</td>
													<td>$613,500</td>
												</tr>
												<tr>
													<td>Saina Agacy</td>
													<td>Team Leader</td>
													<td>Berlin</td>
													<td>31</td>
													<td>$319,575</td>
												</tr>
												<tr>
													<td>Vurumula Dootha</td>
													<td>Human Resource Manager</td>
													<td>Sin City</td>
													<td>21</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Hank Flynn</td>
													<td>Chief Executive</td>
													<td>Amet Accusam</td>
													<td>42</td>
													<td>$187,500</td>
												</tr>
												<tr>
													<td>Stark Mahva</td>
													<td>Senior Technitian</td>
													<td>Florida</td>
													<td>42</td>
													<td>$148,575</td>
												</tr>
												<tr>
													<td>Kappa Alien</td>
													<td>Software Engineer</td>
													<td>Old Town</td>
													<td>36</td>
													<td>$215,250</td>
												</tr>
												<tr>
													<td>Zara Lorson</td>
													<td>AWS Developer</td>
													<td>Voluptua Ea</td>
													<td>21</td>
													<td>$15,000</td>
												</tr>
												<tr>
													<td>Skatie Jaow</td>
													<td>Cheif Marketing Executive</td>
													<td>Consetetur Sed</td>
													<td>31</td>
													<td>$57,650</td>
												</tr>
												<tr>
													<td>Stevens Karra</td>
													<td>Junior Promoter</td>
													<td>Vero Consetetur</td>
													<td>23</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Fermi Butler</td>
													<td>Bank Manager</td>
													<td>Et et</td>
													<td>41</td>
													<td>$56,250</td>
												</tr>
												<tr>
													<td>Ben Tennyson</td>
													<td>System Administrator</td>
													<td>Vero Et</td>
													<td>22</td>
													<td>$13,500</td>
												</tr>
												<tr>
													<td>Sishya Charee</td>
													<td>Professor</td>
													<td>Sea Lorem</td>
													<td>25</td>
													<td>$68,500</td>
												</tr>
												<tr>
													<td>Shahid Lorey</td>
													<td>System Manager</td>
													<td>Lorem Consetetur</td>
													<td>25</td>
													<td>$83,000</td>
												</tr>
												<tr>
													<td>Jennifer Zal</td>
													<td>Ethical Hacker</td>
													<td>Denver</td>
													<td>25</td>
													<td>$153,000</td>
												</tr>
												<tr>
													<td>Cha Nolan</td>
													<td>Android Developer</td>
													<td>Bap Atla</td>
													<td>23</td>
													<td>$160,499</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">DataTable With Custom Input Fields</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
											<table class="table table-bordered text-nowrap border-bottom" id="formElementsDataTable">
											<thead>
												<tr>
													<th class="wd-5p">S.No</th>
													<th class="wd-5p">Sizes</th>
													<th class="wd-5p">Radio</th>
													<th class="wd-35p">Input Text</th>
													<th class="wd-30p">Input Number</th>
													<th class="wd-10p">Select2</th>
													<th class="wd-15p">Button</th>
													<th class="wd-5p">Checkbox</th>
													<th class="wd-5p">Toggle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="tx-center">1</td>
													<td>Small</td>
													<td>
														<label class="custom-control custom-radio mb-0">
															<input type="radio" class="custom-control-input" name="customRadio" value="option1">
															<span class="custom-control-label"></span>
														</label>
													</td>
													<td>
														<input type="text" class="form-control form-control-sm" id="inputName2" placeholder="small">
													</td>
													<td>
														<input type="number" class="form-control form-control-sm" id="inputName3" placeholder="small">
													</td>
													<td>
														<div class="form-group mb-0 select2-sm">
															<select class="form-select form-select-sm select2 select2-sm" id="inputGroupSelect01">
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</td>
													<td>
														<button class="btn btn-sm btn-block btn-primary">Button</button>
													</td>
													<td>
														<label class="custom-control custom-checkbox mb-0">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label"></span>
														</label>
													</td>
													<td>
														<label class="m-0 p-0">
															<span class="me-2"></span>
															<input type="checkbox" class="custom-switch-input" checked>
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="tx-center">2</td>
													<td><span class="tx-16">Default</span></td>
													<td>
														<label class="custom-control custom-radio mb-0 custom-control-md">
															<input type="radio" class="custom-control-input" name="customRadio" value="option1" checked>
															<span class="custom-control-label custom-control-label-md  tx-17"></span>
														</label>
													</td>
													<td>
														<input type="text" class="form-control form-control-md" id="inputName4" placeholder="default">
													</td>
													<td>
														<input type="number" class="form-control form-control-md" id="inputName5" placeholder="default">
													</td>
													<td>
														<div class="form-group mb-0">
															<select class="form-select form-select select2 select2-default" id="inputGroupSelect02">
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</td>
													<td>
														<button class="btn btn-md btn-primary btn-block">Button</button>
													</td>
													<td>
														<label class="custom-control custom-checkbox mb-0 custom-control-md">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label custom-control-label-md  tx-17"></span>
														</label>
													</td>
													<td>
														<label class="m-0 p-0">
															<span class=" tx-17 me-2"></span>
															<input type="checkbox" class="custom-switch-input">
															<span class="custom-switch-indicator custom-switch-indicator-lg"></span>
														</label>
													</td>
												</tr>
												<tr>
													<td class="tx-center">3</td>
													<td><span class="tx-22">Large</span></td>
													<td>
														<label class="custom-control custom-radio mb-0 custom-control-lg">
															<input type="radio" class="custom-control-input" name="customRadio" value="option1">
															<span class="custom-control-label custom-control-label-lg  tx-20"></span>
														</label>
													</td>
													<td>
														<input type="text" class="form-control form-control-lg" id="inputName6" placeholder="Large">
													</td>
													<td>
														<input type="number" class="form-control form-control-lg" id="inputName7" placeholder="Large">
													</td>
													<td>
														<div class="form-group mb-0 select2-lg">
															<select class="form-select form-select-lg select2" id="inputGroupSelect03">
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</td>
													<td>
														<button class="btn btn-lg btn-block btn-primary">Button</button>
													</td>
													<td>
														<label class="custom-control custom-checkbox mb-0 custom-control-lg">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label custom-control-label-lg  tx-20"></span>
														</label>
													</td>
													<td>
														<label class="m-0 p-0">
															<span class="tx-20 me-2"></span>
															<input type="checkbox" class="custom-switch-input" checked>
															<span class="custom-switch-indicator custom-switch-indicator-xl"></span>
														</label>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Deletable Row DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive deleted-table">
										<button id="button" class="btn btn-primary data-table-btn">Delete selected row</button>
										<table id="deletableRowDataTable" class="table table-bordered text-nowrap border-bottom">
											<thead>
												<tr>
													<th>First name</th>
													<th>Last name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
													<th>Extn.</th>
													<th>E-mail</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger</td>
													<td>Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
													<td>5421</td>
													<td>t.nixon@datatables.net</td>
												</tr>
												<tr>
													<td>Garrett</td>
													<td>Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
													<td>8422</td>
													<td>g.winters@datatables.net</td>
												</tr>
												<tr>
													<td>Ashton</td>
													<td>Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
													<td>1562</td>
													<td>a.cox@datatables.net</td>
												</tr>
												<tr>
													<td>Cedric</td>
													<td>Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
													<td>6224</td>
													<td>c.kelly@datatables.net</td>
												</tr>
												<tr>
													<td>Airi</td>
													<td>Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
													<td>5407</td>
													<td>a.satou@datatables.net</td>
												</tr>
												<tr>
													<td>Brielle</td>
													<td>Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
													<td>4804</td>
													<td>b.williamson@datatables.net</td>
												</tr>
												<tr>
													<td>Herrod</td>
													<td>Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
													<td>9608</td>
													<td>h.chandler@datatables.net</td>
												</tr>
												<tr>
													<td>Rhona</td>
													<td>Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
													<td>6200</td>
													<td>r.davidson@datatables.net</td>
												</tr>
												<tr>
													<td>Colleen</td>
													<td>Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
													<td>2360</td>
													<td>c.hurst@datatables.net</td>
												</tr>
												<tr>
													<td>Sonya</td>
													<td>Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
													<td>1667</td>
													<td>s.frost@datatables.net</td>
												</tr>
												<tr>
													<td>Jena</td>
													<td>Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
													<td>3814</td>
													<td>j.gaines@datatables.net</td>
												</tr>
												<tr>
													<td>Quinn</td>
													<td>Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
													<td>9497</td>
													<td>q.flynn@datatables.net</td>
												</tr>
												<tr>
													<td>Charde</td>
													<td>Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
													<td>6741</td>
													<td>c.marshall@datatables.net</td>
												</tr>
												<tr>
													<td>Haley</td>
													<td>Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
													<td>3597</td>
													<td>h.kennedy@datatables.net</td>
												</tr>
												<tr>
													<td>Tatyana</td>
													<td>Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
													<td>1965</td>
													<td>t.fitzpatrick@datatables.net</td>
												</tr>
												<tr>
													<td>Michael</td>
													<td>Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
													<td>1581</td>
													<td>m.silva@datatables.net</td>
												</tr>
												<tr>
													<td>Paul</td>
													<td>Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
													<td>3059</td>
													<td>p.byrd@datatables.net</td>
												</tr>
												<tr>
													<td>Gloria</td>
													<td>Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
													<td>1721</td>
													<td>g.little@datatables.net</td>
												</tr>
												<tr>
													<td>Bradley</td>
													<td>Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
													<td>2558</td>
													<td>b.greer@datatables.net</td>
												</tr>
												<tr>
													<td>Dai</td>
													<td>Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
													<td>2290</td>
													<td>d.rios@datatables.net</td>
												</tr>
												<tr>
													<td>Jenette</td>
													<td>Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
													<td>1937</td>
													<td>j.caldwell@datatables.net</td>
												</tr>
												<tr>
													<td>Yuri</td>
													<td>Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
													<td>6154</td>
													<td>y.berry@datatables.net</td>
												</tr>
												<tr>
													<td>Caesar</td>
													<td>Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
													<td>8330</td>
													<td>c.vance@datatables.net</td>
												</tr>
												<tr>
													<td>Doris</td>
													<td>Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
													<td>3023</td>
													<td>d.wilder@datatables.net</td>
												</tr>
												<tr>
													<td>Angelica</td>
													<td>Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
													<td>5797</td>
													<td>a.ramos@datatables.net</td>
												</tr>
												<tr>
													<td>Gavin</td>
													<td>Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
													<td>8822</td>
													<td>g.joyce@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
													<td>9239</td>
													<td>j.chang@datatables.net</td>
												</tr>
												<tr>
													<td>Brenden</td>
													<td>Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
													<td>1314</td>
													<td>b.wagner@datatables.net</td>
												</tr>
												<tr>
													<td>Fiona</td>
													<td>Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
													<td>2947</td>
													<td>f.green@datatables.net</td>
												</tr>
												<tr>
													<td>Shou</td>
													<td>Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
													<td>8899</td>
													<td>s.itou@datatables.net</td>
												</tr>
												<tr>
													<td>Michelle</td>
													<td>House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
													<td>2769</td>
													<td>m.house@datatables.net</td>
												</tr>
												<tr>
													<td>Suki</td>
													<td>Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
													<td>6832</td>
													<td>s.burks@datatables.net</td>
												</tr>
												<tr>
													<td>Prescott</td>
													<td>Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
													<td>3606</td>
													<td>p.bartlett@datatables.net</td>
												</tr>
												<tr>
													<td>Gavin</td>
													<td>Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
													<td>2860</td>
													<td>g.cortez@datatables.net</td>
												</tr>
												<tr>
													<td>Martena</td>
													<td>Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
													<td>8240</td>
													<td>m.mccray@datatables.net</td>
												</tr>
												<tr>
													<td>Unity</td>
													<td>Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
													<td>5384</td>
													<td>u.butler@datatables.net</td>
												</tr>
												<tr>
													<td>Howard</td>
													<td>Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
													<td>7031</td>
													<td>h.hatfield@datatables.net</td>
												</tr>
												<tr>
													<td>Hope</td>
													<td>Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
													<td>6318</td>
													<td>h.fuentes@datatables.net</td>
												</tr>
												<tr>
													<td>Vivian</td>
													<td>Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
													<td>9422</td>
													<td>v.harrell@datatables.net</td>
												</tr>
												<tr>
													<td>Timothy</td>
													<td>Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
													<td>7580</td>
													<td>t.mooney@datatables.net</td>
												</tr>
												<tr>
													<td>Jackson</td>
													<td>Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
													<td>1042</td>
													<td>j.bradshaw@datatables.net</td>
												</tr>
												<tr>
													<td>Olivia</td>
													<td>Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
													<td>2120</td>
													<td>o.liang@datatables.net</td>
												</tr>
												<tr>
													<td>Bruno</td>
													<td>Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
													<td>6222</td>
													<td>b.nash@datatables.net</td>
												</tr>
												<tr>
													<td>Sakura</td>
													<td>Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
													<td>9383</td>
													<td>s.yamamoto@datatables.net</td>
												</tr>
												<tr>
													<td>Thor</td>
													<td>Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
													<td>8327</td>
													<td>t.walton@datatables.net</td>
												</tr>
												<tr>
													<td>Finn</td>
													<td>Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
													<td>2927</td>
													<td>f.camacho@datatables.net</td>
												</tr>
												<tr>
													<td>Serge</td>
													<td>Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
													<td>8352</td>
													<td>s.baldwin@datatables.net</td>
												</tr>
												<tr>
													<td>Zenaida</td>
													<td>Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
													<td>7439</td>
													<td>z.frank@datatables.net</td>
												</tr>
												<tr>
													<td>Zorita</td>
													<td>Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
													<td>4389</td>
													<td>z.serrano@datatables.net</td>
												</tr>
												<tr>
													<td>Jennifer</td>
													<td>Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
													<td>3431</td>
													<td>j.acosta@datatables.net</td>
												</tr>
												<tr>
													<td>Cara</td>
													<td>Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
													<td>3990</td>
													<td>c.stevens@datatables.net</td>
												</tr>
												<tr>
													<td>Hermione</td>
													<td>Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
													<td>1016</td>
													<td>h.butler@datatables.net</td>
												</tr>
												<tr>
													<td>Lael</td>
													<td>Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
													<td>6733</td>
													<td>l.greer@datatables.net</td>
												</tr>
												<tr>
													<td>Jonas</td>
													<td>Alison</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
													<td>8196</td>
													<td>j.alexander@datatables.net</td>
												</tr>
												<tr>
													<td>Shad</td>
													<td>Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
													<td>6373</td>
													<td>s.decker@datatables.net</td>
												</tr>
												<tr>
													<td>Michael</td>
													<td>Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
													<td>5384</td>
													<td>m.bruce@datatables.net</td>
												</tr>
												<tr>
													<td>Donna</td>
													<td>Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
													<td>4226</td>
													<td>d.snider@datatables.net</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

					<!-- Row -->
					<div class="row row-sm">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">File Export DataTable</div>
								</div>
								<div class="card-body">
									<div class="table-responsive  export-table">
										<table id="fieExportDataTable" class="table table-bordered text-nowrap key-buttons border-bottom">
											<thead>
												<tr>
													<th class="border-bottom-0">Name</th>
													<th class="border-bottom-0">Position</th>
													<th class="border-bottom-0">Office</th>
													<th class="border-bottom-0">Age</th>
													<th class="border-bottom-0">Start date</th>
													<th class="border-bottom-0">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
												</tr>
												<tr>
													<td>Michelle House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
												</tr>
												<tr>
													<td>Suki Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
												</tr>
												<tr>
													<td>Prescott Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Gavin Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
												</tr>
												<tr>
													<td>Martena Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
												</tr>
												<tr>
													<td>Unity Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
												</tr>
												<tr>
													<td>Howard Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
												</tr>
												<tr>
													<td>Hope Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
												</tr>
												<tr>
													<td>Vivian Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
												</tr>
												<tr>
													<td>Timothy Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Jackson Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
												</tr>
												<tr>
													<td>Olivia Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
												</tr>
												<tr>
													<td>Bruno Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
												</tr>
												<tr>
													<td>Sakura Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
												</tr>
												<tr>
													<td>Thor Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Finn Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
												</tr>
												<tr>
													<td>Serge Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
												</tr>
												<tr>
													<td>Zenaida Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
												</tr>
												<tr>
													<td>Zorita Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
												</tr>
												<tr>
													<td>Jennifer Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
												</tr>
												<tr>
													<td>Cara Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Hermione Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
												</tr>
												<tr>
													<td>Lael Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
												</tr>
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
												</tr>
												<tr>
													<td>Shad Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Michael Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->

@endsection

@section('scripts')

		<!-- Ionicons js -->
		<script src="{{asset('build/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{asset('build/assets/plugins/moment/moment.js')}}"></script>

		<!-- Internal Data tables -->
		<script src="{{asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
		@vite('resources/assets/js/table-data.js')

		<!-- INTERNAL Select2 js -->
		<script src="{{asset('build/assets/plugins/select2/js/select2.full.min.js')}}"></script>

@endsection
