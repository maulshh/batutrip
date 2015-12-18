<div class="col-md-12">
    <div class='box box-solid box-danger'>
    <div class="box-header">
        Daftar Trip
    </div>
    <div class='box-body table-responsive'>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped table-hover" id="data-posts">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($all as $trip){?>
                        <td><?=$trip->title?></td>
                        <td><?=$trip->name?></td>
                        <td><?=$trip->status?></td>
                        <td><?=$trip->created?></td>
                        <td><a class="btn btn-default" href="<?=base_url('trips/view/'.$trip->trip_id)?>"><i class="fa fa-search"></i> Detail</a></td>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.box -->
</div>