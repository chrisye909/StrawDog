<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="jumbotron" style="background-color: white;">
            <?php $motto = App\Models\Motto::all()->random() ?>
            <h2>{!! $motto->content !!}</h2>
            <h2 class="pull-right" style="margin-top: 0px;"><small> -- {!! $motto->source !!}</small></h2>
        </div>
    </div>
</div>