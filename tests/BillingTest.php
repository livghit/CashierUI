<?php

use function Pest\Laravel\get;

it('loads billing view', function () {
    get('/billing')
    ->assertStatus(200);
});

it('has billing config', function () {
    expect(config('cashierui'))->not->toBeNull();
});

it('has cashier config' , function(){
    expect(config('cashier'))->not->toBeNull();
});
