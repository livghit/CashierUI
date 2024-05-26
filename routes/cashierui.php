<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/billing', function (): View {
    return view('cashierui::billing');
})->name('billing');

Route::get('/billing/invoice/{invoiceId}', function (
    Request $request,
    string $invoiceId
) {
    return $request->user()->downloadInvoice($invoiceId);
})->name('billing.invoice.download');

Route::get('/subscription-checkout/{price}', function (
    Request $request,
    string $price
) {
    return $request
        ->user()
        ->newSubscription('default', $price)
        ->checkout([
            'success_url' => route('welcome'),
            'cancel_url' => url('/dashboard'),
        ]);
})->name('subscription-checkout');

Route::post('/billing/updateDefaultPaymentMethod/{paymentMethod}', function () {
    // Allow user to update its default payment Method
})->name('updateDefaultPaymentMethod');

Route::post('/billing/cancelSubscription', function () {
    // implement this to allow user to cancel his subscription
})->name('cancelSubscription');

Route::post('/billing/resumeSubscription', function () {
    // implement this to allow user to resume subscription
})->name('resumeSubscription');
