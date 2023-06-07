@extends('layouts.admin')

@section('content')

<section id="skillset" class="even-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3>Skillset</h3>
                <hr class="section-hr">
            </div>
        </div>
        <div class="row">
            <?php $skillset = config('skillset'); ?>
            <?php foreach ($skillset as $item): ?>
                <div class="col-sm-3 col-xs-4 d-flex justify-content-center">
                    <img class="w-50" src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

@endsection
