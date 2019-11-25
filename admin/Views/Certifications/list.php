<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-file-signature"></i> OEM Certifications</h3>
                <h6><a href="#/">Dashboard</a> | <a href="#/Certifications/list">OEM Certifications</a> | Manage OEM Certifications</h6>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <i class="fa fa-file-signature fa-fw"></i> Manage OEM Certifications
                        <div class="pull-right">
                            
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" ng-model="query">
                                    <div class="input-group-addon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered table-condensed">
                            <thead>
                                <tr style="font-weight:bold;">
                                    <td>Sr.no.</td>
                                    <td>Professional</td> 
                                    <td>Provider</td>
                                    <td>Exam</td>
                                    <td>Exam Desc. </td>
                                    <td>Certified On</td>
                                    <td>Expires </td>
                                    <td>Valid Through</td>
                                    <td>Expired</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr ng-repeat="c in clc.Certifications.data2show  | filter:query track by $index">
                                    <td> {{$index+1}}</td> 
                                    <td> {{c.cprofName}}</td>
                                    <td> {{c.cprovName}} </td>
                                    <td> {{c.certiExam}} </td>
                                    <td> {{c.certiExamDesc}}</td>
                                    <td> {{c.certifiedOn}}</td>
                                    <td> {{(c.cerytiExpires == "y")? "Yes": "No"}}</td>
                                    <td> {{c.validTill}}</td>
                                    <td> {{(c.Expired == 1)? "Yes" : "No" }}</td>
                                    <td> 
                                        <div class="dropdown">
                                                <button class="btn btn-xs btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu" style="min-width:60px !important;">
                                                    <li><a class="btn btn-success btn-xs" href="#/Certifications/update/{{c.certiId}}"><i class="fa fa-edit"></i></a></li>
                                                    <li><a class="btn btn-info btn-xs" href="#/Certifications/details/{{c.certiId}}"><i class="fa fa-list"></i></a></li>
                                                    <li><a class="btn btn-danger btn-xs" href="#/Certifications/delete/{{c.certiId}}"><i class="fa fa-trash"></i></a></li>
                                                </ul>
                                        </div>                                            
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                        <div class="row" ng-show="clc.Certifications.Paging.pagingRequired()">
                            <div class="col-lg-9 text-left">
                                <button class="btn btn-primary btn-xs" ng-show="clc.Certifications.Paging.showPrevious()" ng-click="clc.Certifications.Paging.First(clc.Certifications);"> <i class="fa fa-backward"></i></button>
                                <button class="btn btn-primary btn-xs" ng-show="clc.Certifications.Paging.showNext()" ng-click="clc.Certifications.Paging.Last(clc.Certifications);"> <i class="fa fa-forward"></i></button>
                            </div>                             
                            <div class="col-lg-2 text-right" style="margin-top:-5px;">
                                <h6>Page {{clc.Certifications.Paging.getCurrentPage()}} of {{clc.Certifications.Paging.getNoOfPages()}}</h6>
                            </div>
                            <div class="col-lg-1 text-left">                                
                                <button class="btn btn-primary btn-xs" ng-show="clc.Certifications.Paging.showPrevious()" ng-click="clc.Certifications.Paging.Previous(clc.Certifications);"> <i class="fa fa-angle-left"></i></button>
                                <button class="btn btn-primary btn-xs" ng-show="clc.Certifications.Paging.showNext()" ng-click="clc.Certifications.Paging.Next(clc.Certifications);"> <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>                        
                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>
            

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->