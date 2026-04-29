<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jurisdictions', function () {
    return view('jurisdictions');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/contact/request', [ContactController::class, 'request'])->name('contact.request');

Route::prefix('corporate')->group(function () {
    Route::get('/ibc-formation', function () {
        return view('corporate/ibc-formation');
    })->name('corporate.ibc-formation');

    Route::get('/registered-agent-services', function () {
        return view('corporate/registered-agent-services');
    })->name('corporate.registered-agent-services');

    Route::get('/trust-and-foundation-registration', function () {
        return view('corporate/trust-and-foundation-registration');
    })->name('corporate.trust-and-foundation-registration');

    Route::get('/nominee-director-and-shareholder-access', function () {
        return view('corporate/nominee-director-and-shareholder-access');
    })->name('corporate.nominee-director-and-shareholder-access');

    Route::get('/bank-account-opening', function () {
        return view('corporate/bank-account-opening');
    })->name('corporate.bank-account-opening');

    Route::get('/accounting-and-auditing', function () {
        return view('corporate/accounting-and-auditing');
    })->name('corporate.accounting-and-auditing');
    

    Route::get('/legal-opinions-of-distinction', function () {
        return view('corporate/legal-opinions-of-distiction');
    })->name('corporate.legal-opinions-of-distiction');
    
    
});

Route::prefix('about')->group(function () {
    Route::get('/about-us', function () {
        return view('about/about-us');
    })->name('about.about-us');

    Route::get('/faq', function () {
        return view('about/faq');
    })->name('about.faq');
});

Route::prefix('licensing')->group(function () {
    Route::get('/brokerage-forex', function () {
        return view('licensing/brokerage-forex');
    })->name('licensing.brokerage-forex');

    Route::get('/gaming-and-gambling', function () {
        return view('licensing/gaming-and-gambling');
    })->name('licensing.gaming-and-gambling');

    Route::get('/insurance', function () {
        return view('licensing/insurance');
    })->name('licensing.insurance');

    Route::get('/banking', function () {
        return view('licensing/banking');
    })->name('licensing.banking');

    Route::get('/digital-assets', function () {
        return view('licensing/digital-assets');
    })->name('licensing.digital-assets');
});

Route::prefix('blog')->group(function () {
    Route::get('/cheapest-crypto-license', function () {
        return view('blog/cheapest-crypto-license');
    })->name('blog.cheapest-crypto-license');

    Route::get('/comoros-forex-license', function () {
        return view('blog/comoros-forex-license');
    })->name('blog.comoros-forex-license');

    Route::get('/gaming-license-in-curacao', function () {
        return view('blog/gaming-license-in-curacao');
    })->name('blog.gaming-license-in-curacao');

    Route::get('/how-to-obtain-payment-institution-license', function () {
        return view('blog/how-to-obtain-payment-institution-license');
    })->name('blog.how-to-obtain-payment-institution-license');

    Route::get('/ibc-formation', function () {
        return view('blog/ibc-formation');
    })->name('blog.ibc-formation');

    Route::get('/st-lucia-forex-license', function () {
        return view('blog/st-lucia-forex-license');
    })->name('blog.st-lucia-forex-license');

    Route::get('/jurisdictions-to-establish-forex-brokerage-business', function () {
        return view('blog/jurisdictions-to-establish-forex-brokerage-business');
    })->name('blog.jurisdictions-to-establish-forex-brokerage-business');

    Route::get('/top-5-best-offshore-jurisdiction-for-banking-license', function () {
        return view('blog/top-5-best-offshore-jurisdiction-for-banking-license');
    })->name('blog.top-5-best-offshore-jurisdiction-for-banking-license');

    Route::get('/which-country-is-best-for-crypto-exchange-license', function () {
        return view('blog/which-country-is-best-for-crypto-exchange-license');
    })->name('blog.which-country-is-best-for-crypto-exchange-license');
    
    Route::get('/open-us-bank-account-online-from-abroad', function () {
    return view('blog.open-us-bank-account-online-from-abroad');
    })->name('blog.open-us-bank-account-online-from-abroad');
    
    Route::get('/business-formation-lawyer', function () {
    return view('blog.business-formation-lawyer');
    })->name('blog.business-formation-lawyer');

   Route::get('/international-company-formation', function () {
    return view('blog.international-company-formation');
    })->name('blog.international-company-formation');
    
    Route::get('/best-llc-formation', function () {
    return view('blog.best-llc-formation');
    })->name('blog.best-llc-formation');
    
    Route::get('/entity-formation-attorney', function () {
    return view('blog.entity-formation-attorney');
    })->name('blog.entity-formation-attorney');
    
    Route::get('/startup-company-formation', function () {
    return view('blog.startup-company-formation');
    })->name('blog.startup-company-formation');
    
    Route::get('/delaware-limited-liability-company-formation', function () {
    return view('blog.delaware-limited-liability-company-formation');
    })->name('blog.delaware-limited-liability-company-formation');
    
    Route::get('/corporation-formation-attorney', function () {
    return view('blog.corporation-formation-attorney');
    })->name('blog.corporation-formation-attorney');
    
    Route::get('/business-formation-consulting', function () {
    return view('blog.business-formation-consulting');
    })->name('blog.business-formation-consulting');
    
    Route::get('/what-is-an-ibc', function () {
    return view('blog.what-is-an-ibc');
    })->name('blog.what-is-an-ibc');
    
    Route::get('/international-tax-service', function () {
    return view('blog.international-tax-service');
    })->name('blog.international-tax-service');
    
    Route::get('/doing-business-overseas', function () {
    return view('blog.doing-business-overseas');
    })->name('blog.doing-business-overseas');
    
    Route::get('/marshall-islands-company-registration', function () {
    return view('blog.marshall-islands-company-registration');
    })->name('blog.marshall-islands-company-registration');
    
     Route::get('/international-business-license', function () {
    return view('blog.international-business-license');
    })->name('blog.international-business-license');
    
    Route::get('/us-citizens-with-foreign-business', function () {
    return view('blog.us-citizens-with-foreign-business');
    })->name('blog.us-citizens-with-foreign-business');
    
     Route::get('/offshore-company-formation', function () {
    return view('blog.offshore-company-formation');
    })->name('blog.offshore-company-formation');
    
      Route::get('/seychelles-offshore-company-formation', function () {
    return view('blog.seychelles-offshore-company-formation');
    })->name('blog.seychelles-offshore-company-formation');
    
     Route::get('/what-is-a-resident-agent', function () {
    return view('blog.what-is-a-resident-agent');
    })->name('blog.what-is-a-resident-agent');
    
      Route::get('/registered-agent-services-usa', function () {
    return view('blog.registered-agent-services-usa');
    })->name('blog.registered-agent-services-usa');
    
      Route::get('/connecticut-registered-agent', function () {
    return view('blog.connecticut-registered-agent');
    })->name('blog.connecticut-registered-agent');
    
    Route::get('/florida-registered-agents', function () {
    return view('blog.florida-registered-agents');
    })->name('blog.florida-registered-agents');
    
    Route::get('/new-york-registered-agent', function () {
    return view('blog.new-york-registered-agent');
    })->name('blog.new-york-registered-agent');
    
    Route::get('/south-carolina-registered-agent', function () {
    return view('blog.south-carolina-registered-agent');
    })->name('blog.south-carolina-registered-agent');
    
    Route::get('/utah-registered-agent', function () {
    return view('blog.utah-registered-agent');
    })->name('blog.utah-registered-agent');
    
    Route::get('/iowa-registered-agent', function () {
    return view('blog.iowa-registered-agent');
    })->name('blog.iowa-registered-agent');
    
     Route::get('/trust-corporate-services', function () {
    return view('blog.trust-corporate-services');
    })->name('blog.trust-corporate-services');
    
    Route::get('/north-carolina-registered-agents', function () {
    return view('blog.north-carolina-registered-agents');
    })->name('blog.north-carolina-registered-agents');
    
    Route::get('/north-carolina-registered-agents', function () {
    return view('blog.north-carolina-registered-agents');
    })->name('blog.north-carolina-registered-agents');
    
    Route::get('/what-is-an-international-company', function () {
    return view('blog.what-is-an-international-company');
    })->name('blog.what-is-an-international-company');
    
     Route::get('/corporate-international-tax', function () {
    return view('blog.corporate-international-tax');
    })->name('blog.corporate-international-tax');
    
     Route::get('/benefits-of-international-licensing', function () {
    return view('blog.benefits-of-international-licensing');
    })->name('blog.benefits-of-international-licensing');
    
    Route::get('/offshore-company-with-a-bank-account', function () {
    return view('blog.offshore-company-with-a-bank-account');
    })->name('blog.offshore-company-with-a-bank-account');
    
     Route::get('/benefits-of-offshore-banking', function () {
    return view('blog.benefits-of-offshore-banking');
    })->name('blog.benefits-of-offshore-banking');
    
    Route::get('/best-jurisdictions-for-online-business', function () {
    return view('blog.best-jurisdictions-for-online-business');
    })->name('blog.best-jurisdictions-for-online-business');
    
    Route::get('/difference-between-credit-union-and-banking', function () {
    return view('blog.difference-between-credit-union-and-banking');
    })->name('blog.difference-between-credit-union-and-banking');
    
     Route::get('/difference-outsourcing-offshoring', function () {
    return view('blog.difference-outsourcing-offshoring');
    })->name('blog.difference-outsourcing-offshoring');
    
      Route::get('/what-is-banking-licensing', function () {
    return view('blog.what-is-banking-licensing');
    })->name('blog.what-is-banking-licensing');
    
    Route::get('/what-is-insurance-licensing', function () {
    return view('blog.what-is-insurance-licensing');
    })->name('blog.what-is-insurance-licensing');
    
    Route::get('/benefits-of-offshore-accounts', function () {
    return view('blog.benefits-of-offshore-accounts');
    })->name('blog.benefits-of-offshore-accounts');
    
    Route::get('/what-is-digital-assets-licensing', function () {
    return view('blog.what-is-digital-assets-licensing');
    })->name('blog.what-is-digital-assets-licensing');
    
    Route::get('/what-is-jurisdiction', function () {
    return view('blog.what-is-jurisdiction');
    })->name('blog.what-is-jurisdiction');
    
      Route::get('/foundation-registration-services', function () {
    return view('blog.foundation-registration-services');
    })->name('blog.foundation-registration-services');
    
     Route::get('/what-are-accounting-services', function () {
    return view('blog.what-are-accounting-services');
    })->name('blog.what-are-accounting-services');
    
      Route::get('/offshore-wealth-planning-strategies', function () {
    return view('blog.offshore-wealth-planning-strategies');
    })->name('blog.offshore-wealth-planning-strategies');
    
     Route::get('/corporate-tax-optimization-offshore', function () {
    return view('blog.corporate-tax-optimization-offshore');
    })->name('blog.corporate-tax-optimization-offshore');
    
     Route::get('/trust-and-foundation-registration-services', function () {
    return view('blog.trust-and-foundation-registration-services');
    })->name('blog.trust-and-foundation-registration-services');
    
      Route::get('/bank-account-freeze-rules', function () {
    return view('blog.bank-account-freeze-rules');
    })->name('blog.bank-account-freeze-rules');
    
     Route::get('/why-jurisdiction-is-important-when-setting-up-a-company', function () {
    return view('blog.why-jurisdiction-is-important-when-setting-up-a-company');
    })->name('blog.why-jurisdiction-is-important-when-setting-up-a-company');
    
    Route::get('/offshore-jurisdiction-corporate-services', function () {
    return view('blog.offshore-jurisdiction-corporate-services');
    })->name('blog.offshore-jurisdiction-corporate-services');
    
     Route::get('/best-jurisdictions-for-company-registration', function () {
    return view('blog.best-jurisdictions-for-company-registration');
    })->name('blog.offshore-jurisdiction-corporate-services');
    
     Route::get('/how-to-open-international-bank-accounts', function () {
    return view('blog.how-to-open-international-bank-accounts');
    })->name('blog.how-to-open-international-bank-accounts');
    
     Route::get('/legal-requirements-for-offshore-companies', function () {
    return view('blog.legal-requirements-for-offshore-companies');
    })->name('blog.legal-requirements-for-offshore-companies');
    
      Route::get('/international-trade-company-formation', function () {
    return view('blog.international-trade-company-formation');
    })->name('blog.international-trade-company-formation');
    
      Route::get('/licenses-are-needed-to-start-a-business', function () {
    return view('blog.licenses-are-needed-to-start-a-business');
    })->name('blog.licenses-are-needed-to-start-a-business');
    
     Route::get('/cryptocurrency-business-licensing', function () {
    return view('blog.cryptocurrency-business-licensing');
    })->name('blog.cryptocurrency-business-licensing');
    
     Route::get('/are-offshore-accounts-legal', function () {
    return view('blog.are-offshore-accounts-legal');
    })->name('blog.are-offshore-accounts-legal');
    
     Route::get('/best-digital-asset-management', function () {
    return view('blog.best-digital-asset-management');
    })->name('blog.best-digital-asset-management');
    
     Route::get('/assets-investment-management', function () {
    return view('blog.assets-investment-management');
    })->name('blog.assets-investment-management');
    
      Route::get('/what-is-a-money-services-business', function () {
    return view('blog.what-is-a-money-services-business');
    })->name('blog.what-is-a-money-services-business');
    
     Route::get('/what-is-data-reporting', function () {
    return view('blog.what-is-data-reporting');
    })->name('blog.what-is-data-reporting');
    
      Route::get('/foreign-limited-liability-company', function () {
    return view('blog.foreign-limited-liability-company');
    })->name('blog.foreign-limited-liability-company');
    
    Route::get('/what-is-a-trademark-registration', function () {
    return view('blog.what-is-a-trademark-registration');
    })->name('blog.what-is-a-trademark-registration');
    
     Route::get('/what-is-pension-services', function () {
    return view('blog.what-is-pension-services');
    })->name('blog.what-is-pension-services');
    
    Route::get('/what-is-virtual-office-services', function () {
    return view('blog.what-is-virtual-office-services');
    })->name('blog.what-is-virtual-office-services');
    
    Route::get('/ssi-monitor-your-bank-account', function () {
    return view('blog.ssi-monitor-your-bank-account');
    })->name('blog.ssi-monitor-your-bank-account');
    
     Route::get('/original-vs-appellate-jurisdiction', function () {
    return view('blog.original-vs-appellate-jurisdiction');
    })->name('blog.original-vs-appellate-jurisdiction');
    
    Route::get('/which-investment-has-least-liquidity', function () {
    return view('blog.which-investment-has-least-liquidity');
    })->name('blog.which-investment-has-least-liquidity');
    
    Route::get('/how-to-set-up-an-offshore-trust', function () {
    return view('blog.how-to-set-up-an-offshore-trust');
    })->name('blog.how-to-set-up-an-offshore-trust');
    
    Route::get('/domestic-vs-offshore-asset-protection-trusts', function () {
    return view('blog.domestic-vs-offshore-asset-protection-trusts');
    })->name('blog.domestic-vs-offshore-asset-protection-trusts');
    
     Route::get('/what-is-trust-administration-services', function () {
    return view('blog.what-is-trust-administration-services');
    })->name('blog.what-is-trust-administration-services');
    
      Route::get('/how-to-start-forex-brokerage-firm', function () {
    return view('blog.how-to-start-forex-brokerage-firm');
    })->name('blog.how-to-start-forex-brokerage-firm');
    
    Route::get('/how-much-does-it-cost-to-start-forex-brokerage', function () {
    return view('blog.how-much-does-it-cost-to-start-forex-brokerage');
    })->name('blog.how-much-does-it-cost-to-start-forex-brokerage');
    
    Route::get('/forex-brokerage-business-plan', function () {
    return view('blog.forex-brokerage-business-plan');
    })->name('blog.forex-brokerage-business-plan');
    
     Route::get('/white-label-forex-brokerage', function () {
    return view('blog.white-label-forex-brokerage');
    })->name('blog.white-label-forex-brokerage');
    
     Route::get('/seychelles-forex-brokerage-license', function () {
    return view('blog.seychelles-forex-brokerage-license');
    })->name('blog.seychelles-forex-brokerage-license');
    
     Route::get('/vanuatu-forex-brokerage-license', function () {
    return view('blog.vanuatu-forex-brokerage-license');
    })->name('blog.vanuatu-forex-brokerage-license');
    
     Route::get('/forex-trading-license-uk', function () {
    return view('blog.forex-trading-license-uk');
    })->name('blog.forex-trading-license-uk');
    
     Route::get('/cayman-islands-forex-license', function () {
    return view('blog.cayman-islands-forex-license');
    })->name('blog.cayman-islands-forex-license');
    
    Route::get('/forex-license-in-cyprus', function () {
    return view('blog.forex-license-in-cyprus');
    })->name('blog.forex-license-in-cyprus');
    
    Route::get('/anjouan-forex-license', function () {
    return view('blog.anjouan-forex-license');
    })->name('blog.anjouan-forex-license');
    
       Route::get('/asset-management-vs-investment-management', function () {
    return view('blog.asset-management-vs-investment-management');
    })->name('blog.asset-management-vs-investment-management');
    
    
      Route::get('/employer-plan-assets-into-investment-management', function () {
    return view('blog.employer-plan-assets-into-investment-management');
    })->name('blog.employer-plan-assets-into-investment-management');
    
     Route::get('/how-to-choose-the-right-financial-institution', function () {
    return view('blog.how-to-choose-the-right-financial-institution');
    })->name('blog.how-to-choose-the-right-financial-institution');
    
    Route::get('/common-feature-of-a-financial-institution', function () {
    return view('blog.common-feature-of-a-financial-institution');
    })->name('blog.common-feature-of-a-financial-institution');
});


Route::prefix('other-services')->group(function () {
    Route::get('/aircraft-and-shipping-registration', function () {
        return view('other-services/aircraft-and-shipping-registration');
    })->name('other-services.aircraft-and-shipping-registration');

    Route::get('/assets-and-investments-advisory', function () {
        return view('other-services/assets-and-investments-advisory');
    })->name('other-services.assets-and-investments-advisory');

    Route::get('/credit-and-bond-institutions', function () {
        return view('other-services/credit-and-bond-institutions');
    })->name('other-services.credit-and-bond-institutions');

    Route::get('/data-reporting', function () {
        return view('other-services/data-reporting');
    })->name('other-services.data-reporting');

    Route::get('/electronic-and-money-services-business', function () {
        return view('other-services/electronic-and-money-services-business');
    })->name('other-services.electronic-and-money-services-business');

    Route::get('/investment-funds', function () {
        return view('other-services/investment-funds');
    })->name('other-services.investment-funds');

    Route::get('/limited-liability-companies', function () {
        return view('other-services/limited-liability-companies');
    })->name('other-services.limited-liability-companies');

    Route::get('/pension-services', function () {
        return view('other-services/pension-services');
    })->name('other-services.pension-services');

    Route::get('/trademark-registration', function () {
        return view('other-services/trademark-registration');
    })->name('other-services.trademark-registration');

    Route::get('/trust-services', function () {
        return view('other-services/trust-services');
    })->name('other-services.trust-services');

    Route::get('/virtual-office-services', function () {
        return view('other-services/virtual-office-services');
    })->name('other-services.virtual-office-services');
    
});

// Sitemap routes
Route::get('/sitemap.xml', function () {
    return redirect('/sitemap_index.xml', 301);
});
Route::get('/sitemap_index.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/admin/sitemap/clear-cache', [SitemapController::class, 'clearCache'])->name('sitemap.clear-cache');

 // URL Redirects - Permanent redirects for wrong/old URLs
  Route::get('/company-formation', function () {
    return redirect('/corporate/ibc-formation', 301);
  });


  // SEO Redirects - Fix duplicate content issues
  Route::get('/blog/top-4-jurisdictions-to-establish-forex-brokerage', function () {
    return redirect('/blog/top-4-jurisdictions-to-establish-a-forex-brokerage-business', 301);
  });

  Route::get('/blog/delaware-limited-liability-company-formationormation', function () {
    return redirect('/blog/delaware-limited-liability-company-formation', 301);
  });
