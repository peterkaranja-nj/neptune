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
    $posts = [
        ['date' => '2026-04-28', 'slug' => 'common-feature-of-a-financial-institution', 'image' => '/images/images/common-feature-of-a-financial-institution.jpg', 'category' => 'Common Feature of a Financial Institution', 'title' => 'Common Feature of a Financial Institution Explained', 'excerpt' => 'Financial systems make money easy and secure for financial managers in the contemporary world. Everything uses trusted financial services..'],
        ['date' => '2026-04-27', 'slug' => 'how-to-choose-the-right-financial-institution', 'image' => '/images/images/how-to-choose-the-right-financial-institution.jpg', 'category' => 'How to Choose the Right Financial Institution', 'title' => 'How to Choose the Right Financial Institution: 2026 Easy Guide', 'excerpt' => 'In the contemporary world of business, it is extremely vital to understand how to choose the right financial institution. Whether you are setting up an offshore company..'],
        ['date' => '2026-04-27', 'slug' => 'employer-plan-assets-into-investment-management', 'image' => '/images/images/employer-plan-assets-into-investment-management.jpg', 'category' => 'Employer Plan Assets Into Investment Management', 'title' => 'Employer Plan Assets Into Investment Management: Deep Guide', 'excerpt' => 'By how to integrate employer plan assets into investment management, we are referring to how companies can manage employee money, such as pensions..'],
        ['date' => '2026-04-24', 'slug' => 'asset-management-vs-investment-management', 'image' => '/images/images/asset-management-vs-investment-management.jpg', 'category' => 'Asset Management vs Investment Management', 'title' => 'Asset Management vs Investment Management: Key Guide', 'excerpt' => 'The issue that many people are confused when they listen to asset management vs investment management, since they are similar but not equal..'],
        ['date' => '2026-04-23', 'slug' => 'anjouan-forex-license', 'image' => '/images/images/anjouan-forex-license.jpg', 'category' => 'Anjouan Forex License', 'title' => 'Anjouan Forex License: Complete Guide Low-Cost Forex Setup', 'excerpt' => 'The idea of becoming a forex brokerage is exciting, and deciding which license to take may be confusing and costly. This is why the Anjouan forex license..'],
        ['date' => '2026-04-22', 'slug' => 'forex-license-in-cyprus', 'image' => '/images/images/forex-license-in-cyprus.jpg', 'category' => 'Forex License in Cyprus', 'title' => 'Forex License in Cyprus: Secret to EU Trading Success', 'excerpt' => 'The initiation of the forex business in Europe is developing rapidly, and Cyprus ranks amongst the best options. A forex license within Cyprus..'],
        ['date' => '2026-04-21', 'slug' => 'cayman-islands-forex-license', 'image' => '/images/images/cayman-islands-forex-license.png', 'category' => 'Cayman Islands Forex License', 'title' => 'Cayman Islands Forex License: Ultimate Guide 2026', 'excerpt' => 'A large number of businesses in the present day would like to venture into the forex market with secure offshore destinations, and one of the safest..'],
        ['date' => '2026-04-20', 'slug' => 'forex-trading-license-uk', 'image' => '/images/images/forex-trading-license-uk.jpg', 'category' => 'Forex Trading License UK', 'title' => 'Forex Trading License UK: Ultimate 2026 Guide', 'excerpt' => 'An official license, which is known as a forex trading license UK, is issued by the UK Financial Conduct Authority (FCA), which authorizes a company..'],
        ['date' => '2026-04-17', 'slug' => 'vanuatu-forex-brokerage-license', 'image' => '/images/images/vanuatu-forex-brokerage-license.jpg', 'category' => 'Vanuatu Forex Brokerage License', 'title' => 'How a Vanuatu Forex Brokerage License Can Grow Your Business', 'excerpt' => 'To open a forex brokerage, appropriate licensing and compliance with regulations are necessary. A Vanuatu Forex Brokerage License..'],
        ['date' => '2026-04-16', 'slug' => 'seychelles-forex-brokerage-license', 'image' => '/images/images/seychelles-forex-brokerage-license.jpg', 'category' => 'Seychelles Forex Brokerage License', 'title' => 'Seychelles Forex Brokerage License: Start Your Offshore Journey', 'excerpt' => 'The forex market is also becoming booming, and using a Seychelles forex brokerage license will be an intelligent method by which brokers can operate..'],
        ['date' => '2026-04-15', 'slug' => 'white-label-forex-brokerage', 'image' => '/images/images/white-label-forex-brokerage.jpg', 'category' => 'White Label Forex Brokerage', 'title' => 'White Label Forex Brokerage: Unlock the Potential', 'excerpt' => 'It may be difficult and expensive to start a business of forex trading afresh. That\'s why a white label forex brokerage is the perfect solution..'],
        ['date' => '2026-04-14', 'slug' => 'forex-brokerage-business-plan', 'image' => '/images/images/forex-brokerage-business-plan.jpg', 'category' => 'Forex Brokerage Business Plan', 'title' => 'Forex Brokerage Business Plan: Ultimate Profit Guide', 'excerpt' => 'Starting a forex brokerage without a clear plan is risky. A forex brokerage business plan helps you stay focused, manage costs, and build a strong and trusted company..'],
        ['date' => '2026-04-13', 'slug' => 'how-much-does-it-cost-to-start-forex-brokerage', 'image' => '/images/images/how-much-does-it-cost-to-start-forex-brokerage.jpg', 'category' => 'How Much Does It Cost to Start a Forex Brokerage', 'title' => 'How Much Does It Cost to Start a Forex Brokerage?', 'excerpt' => 'Starting a forex brokerage is an exciting business one of the first questions every entrepreneur asks is: How Much Does It Cost to Start a Forex Brokerage..'],
        ['date' => '2026-04-13', 'slug' => 'how-to-start-forex-brokerage-firm', 'image' => '/images/images/how-to-start-forex-brokerage-firm.jpg', 'category' => 'How to Start a Forex Brokerage Firm', 'title' => 'How to Start a Forex Brokerage Firm: Explained', 'excerpt' => 'Starting a forex brokerage firm can be a highly rewarding business if done the right way. The global foreign exchange (forex) market is one of the largest financial markets..'],
        ['date' => '2026-04-10', 'slug' => 'what-is-trust-administration-services', 'image' => '/images/images/what-is-trust-administration-services.jpg', 'category' => 'What Is Trust Administration Services', 'title' => 'What Is Trust Administration Services? Expert Guide 2026', 'excerpt' => 'Trusts are complex interests to manage, and this is where what is trust administration services come in. They help trustees with day-to-day activities..'],
        ['date' => '2026-04-09', 'slug' => 'domestic-vs-offshore-asset-protection-trusts', 'image' => '/images/images/domestic-vs-offshore-asset-protection-trusts.jpg', 'category' => 'Domestic vs Offshore Asset Protection Trusts', 'title' => 'Domestic vs Offshore Asset Protection Trusts: Which Is Best?', 'excerpt' => 'Wealth protection is something a lot of people think about but find a daunting task. Whether the valuables to be protected are your savings, a business..'],
        ['date' => '2026-04-08', 'slug' => 'how-to-set-up-an-offshore-trust', 'image' => '/images/images/how-to-set-up-offshore-trust.jpg', 'category' => 'How to Set Up an Offshore Trust', 'title' => 'How to Set Up an Offshore Trust for Maximum Protection', 'excerpt' => 'It is more valuable to lock up your wealth and assets than ever before, and a great number of businesses and individuals are searching for ways..'],
        ['date' => '2026-04-07', 'slug' => 'which-investment-has-least-liquidity', 'image' => '/images/images/which-investment-has-least-liquidity.jpg', 'category' => 'Which Investment Has the Least Liquidity', 'title' => 'Which Investment Has the Least Liquidity? Explained', 'excerpt' => 'Liquidity is one of the most important yet often overlooked factors in investing. While returns and risk usually take center stage, how quickly you can access your money can be just as critical..'],
        ['date' => '2026-04-06', 'slug' => 'original-vs-appellate-jurisdiction', 'image' => '/images/images/original-vs-appellate-jurisdiction.jpg', 'category' => 'Original vs Appellate Jurisdiction', 'title' => 'Original vs Appellate Jurisdiction: What\'s the Difference?', 'excerpt' => 'In legal proceedings, understanding where and how a case is heard is just as important as the case itself. Two key concepts that often arise are Original vs Appellate Jurisdiction..'],
        ['date' => '2026-04-06', 'slug' => 'ssi-monitor-your-bank-account', 'image' => '/images/images/ssi-monitor-your-bank-account.jpg', 'category' => 'SSI Monitor Your Bank Account', 'title' => 'How Often Does SSI Monitor Your Bank Account?', 'excerpt' => 'For individuals receiving Supplemental Security Income (SSI), maintaining eligibility is essential and often misunderstood. One of the most common..'],
        ['date' => '2026-04-02', 'slug' => 'what-is-virtual-office-services', 'image' => '/images/images/what-is-virtual-office-services.jpg', 'category' => 'What Is Virtual Office Services', 'title' => 'What Is Virtual Office Services? Save Time & Money', 'excerpt' => 'In the current business environment, most businesses are interested in working professionally without renting a physical office..'],
        ['date' => '2026-04-02', 'slug' => 'what-is-pension-services', 'image' => '/images/images/what-is-pension-services.jpg', 'category' => 'What is Pension Services', 'title' => 'What is Pension Services? Secure Your Retirement Today', 'excerpt' => 'What is Pension Services? It is, quite literally, a way to guarantee a stream of income after you retire from your job..'],
        ['date' => '2026-04-01', 'slug' => 'what-is-a-trademark-registration', 'image' => '/images/images/what-is-trademark-registration.jpg', 'category' => 'What is a Trademark Registration', 'title' => 'What is a Trademark Registration? Protect Your Brand Now', 'excerpt' => 'Protecting your brand is just as important as starting the business. Trademark registration is a way to protect the identity of your business..'],
        ['date' => '2026-03-31', 'slug' => 'foreign-limited-liability-company', 'image' => '/images/images/foreign-limited-liability-company.jpg', 'category' => 'What is a Foreign Limited Liability Company', 'title' => 'What is a Foreign Limited Liability Company? Explained', 'excerpt' => 'In case you are considering going global with your business, you need to know what a foreign limited liability company is..'],
        ['date' => '2026-03-30', 'slug' => 'what-is-data-reporting', 'image' => '/images/images/what-is-data-reporting.jpg', 'category' => 'What Is Data Reporting', 'title' => 'What Is Data Reporting? Boost Your Business Decisions Fast', 'excerpt' => 'Nowadays, there is much data in any business, including sales data, customer records, and financial records. Raw data alone, however, is of no use unless..'],
        ['date' => '2026-03-27', 'slug' => 'what-is-a-money-services-business', 'image' => '/images/images/what-is-money-services-business.jpg', 'category' => 'What Is a Money Services Business', 'title' => 'What Is a Money Services Business? Explained Easy', 'excerpt' => 'Money in the modern world is moving at a faster pace. These transactions are made possible by the services of companies known as money services..'],
        ['date' => '2026-03-26', 'slug' => 'assets-investment-management', 'image' => '/images/images/assets-investment-management.jpg', 'category' => 'Assets and Investment Management', 'title' => 'Assets and Investment Management: Grow Wealth Smartly', 'excerpt' => 'Being in charge of money may be a confusing task, but control of assets and investment is actually about letting your money earn you some income..'],
        ['date' => '2026-03-25', 'slug' => 'best-digital-asset-management', 'image' => '/images/images/best-digital-asset-management.jpg', 'category' => 'Best Digital Asset Management', 'title' => 'Boost Efficiency with the Best Digital Asset Management', 'excerpt' => 'The operation of a business in the present day is associated with numerous digital files such as images, videos, and documents. These files may be located..'],
        ['date' => '2026-03-24', 'slug' => 'are-offshore-accounts-legal', 'image' => '/images/images/are-offshore-accounts-legal.jpg', 'category' => 'Are Offshore Accounts Legal', 'title' => 'Are Offshore Accounts Legal? Truths You Must Know Today', 'excerpt' => 'The first thing that people tend to put up when they initially hear of offshore banking is: Are offshore accounts legal? This question is an outcome..'],
        ['date' => '2026-03-20', 'slug' => 'licenses-are-needed-to-start-a-business', 'image' => '/images/images/licenses-are-needed-to-start-a-business.jpg', 'category' => 'Licenses Are Needed to Start a Business', 'title' => 'Licenses Are Needed to Start a Business: What You Know', 'excerpt' => 'The initiation of a business is a hectic task that most entrepreneurs overlook: Licenses Are Needed to start a Business. Even the best ideas can have..'],
        ['date' => '2026-03-19', 'slug' => 'cryptocurrency-business-licensing', 'image' => '/images/images/cryptocurrency-business-licensing.jpg', 'category' => 'Cryptocurrency Business Licensing', 'title' => 'Cryptocurrency Business Licensing: Your Ultimate Guide', 'excerpt' => 'The world of cryptocurrency is developing rapidly and companies in this industry must adhere to the regulations to be safe..'],
        ['date' => '2026-03-19', 'slug' => 'legal-requirements-for-offshore-companies', 'image' => '/images/images/legal-requirements-offshore-companies.jpg', 'category' => 'Legal Requirements for Offshore Companies', 'title' => 'Legal Requirements for Offshore Companies You Must Know', 'excerpt' => 'Establishing a company abroad can access world markets, tax-related incentives, and simplified business operations. However, it is not a matter of simply..'],
        ['date' => '2026-03-18', 'slug' => 'best-jurisdictions-for-company-registration', 'image' => '/images/images/best-jurisdictions-for-company-registration.jpg', 'category' => 'Best Jurisdictions for Company Registration', 'title' => 'Best Jurisdictions for Company Registration Made Simple', 'excerpt' => 'Starting a business is very exciting, but the location at which one registers the business is very crucial. Best Jurisdictions for Company Registration may influence..'],
        ['date' => '2026-03-17', 'slug' => 'how-to-open-international-bank-accounts', 'image' => '/images/images/how-to-open-international-bank-accounts.jpg', 'category' => 'How to Open International Bank Accounts', 'title' => 'How to Open International Bank Accounts: Global Banking', 'excerpt' => 'The modern globalised world makes individuals and corporations tend to transact in various countries using money. Freelancers are employed by foreign clients..'],
        ['date' => '2026-03-17', 'slug' => 'international-trade-company-formation', 'image' => '/images/images/international-trade-company-formation.jpg', 'category' => 'International Trade Company Formation', 'title' => 'International Trade Company Formation: Unlock Global Growth', 'excerpt' => 'Going global with your business may sound exciting and difficult at the same time. The initial stage towards expanding your business internationally..'],
        ['date' => '2026-03-16', 'slug' => 'offshore-jurisdiction-corporate-services', 'image' => '/images/images/offshore-jurisdiction-corporate-services.jpg', 'category' => 'Offshore Jurisdiction Corporate Services', 'title' => 'Offshore Jurisdiction Corporate Services: Smart Business Guide', 'excerpt' => 'The contemporary world of global business is seeking methods of growth, security, and streamlining of funds. Offshore jurisdiction corporate services assist..'],
        ['date' => '2026-03-13', 'slug' => 'bank-account-freeze-rules', 'image' => '/images/blog-8.jpg', 'category' => 'Bank Account Freeze Rules', 'title' => 'Bank Account Freeze Rules: Why Banks Freeze Accounts', 'excerpt' => 'A bank account freeze can be stressful for both individuals and businesses. When a bank freezes an account, you cannot withdraw money, transfer funds, or make payments..'],
        ['date' => '2026-03-13', 'slug' => 'why-jurisdiction-is-important-when-setting-up-a-company', 'image' => '/images/images/why-jurisdiction-is-important-when-setting-up-a-company.jpg', 'category' => 'Why Jurisdiction Is Important When Setting Up a Company', 'title' => 'Why Jurisdiction Is Important When Setting Up a Company', 'excerpt' => 'When starting a company, one of the most important decisions is choosing the right jurisdiction..'],
        ['date' => '2021-01-12', 'slug' => 'which-country-is-best-for-crypto-exchange-license', 'image' => '/images/blog-7.jpg', 'category' => 'Crypto Currency', 'title' => 'Which country is best for crypto exchange license?', 'excerpt' => 'In recent years, the crypto demand has experienced unprecedented growth, attracting both depositors and entrepreneurs seeking to capitalize on the digital asset revolution..'],
        ['date' => '2021-01-12', 'slug' => 'cheapest-crypto-license', 'image' => '/images/blog-1.jpg', 'category' => 'Crypto Currency', 'title' => 'Cheapest Crypto License', 'excerpt' => 'Around the globe, achieving a charge to labor in the crypto-business is very costly both in terms of time and financially. That is why many people who want to start a corporation...'],
    ];

    // Sort by date descending — latest first
    usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));

    return view('blog', compact('posts'));
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
