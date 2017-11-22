@extends('sablon.master')
@push('content')
<section class="row">
    <div class="col-sm-12">
        <section class="row">
            <div class="col-md-12 col-lg-8">
                <div class="jumbotron">
                    <h1 class="mb-4">Hello, world!</h1>

                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

                    <p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Learn more</a></p>
                </div>

                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Overview</h3>

                        <div class="dropdown card-title-btn-container">
                            <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>

                            <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Latest traffic stats</h6>

                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Recent Orders</h3>

                        <div class="dropdown card-title-btn-container">
                            <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>

                            <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Order #</th>

                                    <th>Product</th>

                                    <th>Customer</th>

                                    <th>Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>0001</td>

                                    <td>Product Name 1</td>

                                    <td>Customer 1</td>

                                    <td>Complete</td>
                                </tr>

                                <tr>
                                    <td>0002</td>

                                    <td>Product Name 2</td>

                                    <td>Customer 2</td>

                                    <td>Complete</td>
                                </tr>

                                <tr>
                                    <td>0003</td>

                                    <td>Product Name 3</td>

                                    <td>Customer 3</td>

                                    <td>Processing</td>
                                </tr>

                                <tr>
                                    <td>0004</td>

                                    <td>Product Name 4</td>

                                    <td>Customer 4</td>

                                    <td>Pending</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Articles</h3>

                        <div class="dropdown card-title-btn-container">
                            <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>

                            <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Latest news</h6>

                        <div class="divider" style="margin-top: 1rem;"></div>

                        <div class="articles-container">
                            <div class="article border-bottom">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-2 date">
                                            <div class="large">30</div>

                                            <div class="text-muted">Jun</div>
                                        </div>

                                        <div class="col-10">
                                            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div><!--End .article-->

                            <div class="article">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-2 date">
                                            <div class="large">30</div>

                                            <div class="text-muted">Jun</div>
                                        </div>

                                        <div class="col-10">
                                            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div><!--End .article-->

                            <div class="article">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-2 date">
                                            <div class="large">30</div>

                                            <div class="text-muted">Jun</div>
                                        </div>

                                        <div class="col-10">
                                            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div><!--End .article-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Top Users</h3>

                        <h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>

                        <div class="user-progress justify-center">
                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                <img src="asset/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                            </div>

                            <div class="col-sm-6 col-md-8">
                                <h6 class="pt-1">Username 1</h6>

                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-2">
                                <div class="progress-label">75%</div>
                            </div>
                        </div>

                        <div class="user-progress justify-center">
                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                <img src="asset/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                            </div>

                            <div class="col-sm-6 col-md-8">
                                <h6 class="pt-1">Username 2</h6>

                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-2">
                                <div class="progress-label">50%</div>
                            </div>
                        </div>

                        <div class="user-progress justify-center">
                            <div class="col-sm-3 col-md-2" style="padding: 0;">
                                <img src="asset/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
                            </div>

                            <div class="col-sm-6 col-md-8">
                                <h6 class="pt-1">Username 3</h6>

                                <div class="progress progress-custom">
                                    <div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-2">
                                <div class="progress-label">25%</div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div id="calendar"></div>

                        <div class="divider"></div>

                        <h3 class="card-title">Timeline</h3>

                        <h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>

                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge"><em class="fa fa-camera"></em></div>

                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h5 class="timeline-title mt-2">Lorem ipsum</h5>
                                    </div>

                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge primary"><em class="fa fa-link"></em></div>

                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h5 class="timeline-title mt-2">Dolor</h5>
                                    </div>

                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge"><em class="fa fa-paperclip"></em></div>

                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h5 class="timeline-title mt-2">Sit amet</h5>
                                    </div>

                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-block">
                        <h3 class="card-title">Todo List</h3>

                        <div class="dropdown card-title-btn-container">
                            <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>

                        <ul class="todo-list mt-2">
                            <li class="todo-list-item">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox-1" />

                                    <label for="checkbox-1">Make coffee</label>

                                    <div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox-2" />

                                    <label for="checkbox-2">Check emails</label>

                                    <div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox-3" />

                                    <label for="checkbox-3">Reply to Jane</label>

                                    <div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox-4" />

                                    <label for="checkbox-4">Work on the new design</label>

                                    <div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
                                </div>
                            </li>
                            <li class="todo-list-item">
                                <div class="form-check">
                                    <input type="checkbox" id="checkbox-5" />

                                    <label for="checkbox-5">Get feedback</label>

                                    <div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
                                </div>
                            </li>
                        </ul>

                        <div class="card-footer todo-list-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
											</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
        </section>
    </div>
</section>
@endpush