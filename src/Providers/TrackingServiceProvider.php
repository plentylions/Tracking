<?php

namespace Tracking\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Services\ItemSearch\Helper\ResultFieldTemplate;
use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\System\Contracts\WebstoreConfigurationRepositoryContract;
use Plenty\Modules\Webshop\Consent\Contracts\ConsentRepositoryContract;
use Plenty\Plugin\ConfigRepository;
use IO\Extensions\Constants\ShopUrls;
use IO\Services\UrlBuilder\UrlQuery;

class TrackingServiceProvider extends ServiceProvider
{

    const PRIORITY = 0;

    /**
     * Register the service provider.
     */

    public function register()
    {
        /** @var ConsentRepositoryContract $consentRepository */
        $consentRepository = pluginApp(ConsentRepositoryContract::class);

        /** @var ConfigRepository $config */
        $config = pluginApp(ConfigRepository::class);

        $consentRepository->registerConsentGroup(
            'other',
            'Tracking::CookieConsent.consentGroupOtherLabel',
            [
                'position' => 300,
                'description' => 'Tracking::CookieConsent.consentGroupOtherDescription'
            ]
        );

        if ($config->get('Tracking.showProductList') === 'true') {
            $consentRepository->registerConsent(
                'gtmProductList',
                'Tracking::CookieConsent.consentProductListLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentProductListDescription',
                    'provider' => 'Tracking::CookieConsent.consentProductListProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentProductListLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentProductListPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupProductList', 'tracking'),
                    'necessary' => $config->get('Tracking.consentProductListNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentProductListIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentProductListCookieNames')))

                ]
            );
        }

        if ($config->get('Tracking.showGoogleAnalytics') === 'true') {
            $consentRepository->registerConsent(
                'gtmGoogleAnalytics',
                'Tracking::CookieConsent.consentGoogleAnalyticsLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentGoogleAnalyticsDescription',
                    'provider' => 'Tracking::CookieConsent.consentGoogleAnalyticsProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentGoogleAnalyticsLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentGoogleAnalyticsPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupGoogleAnalytics', 'tracking'),
                    'necessary' => $config->get('Tracking.consentGoogleAnalyticsNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentGoogleAnalyticsIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentGoogleAnalyticsCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showGoogleAds') === 'true') {
            $consentRepository->registerConsent(
                'gtmGoogleAds',
                'Tracking::CookieConsent.consentGoogleAdsLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentGoogleAdsDescription',
                    'provider' => 'Tracking::CookieConsent.consentGoogleAdsProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentGoogleAdsLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentGoogleAdsPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupGoogleAds', 'tracking'),
                    'necessary' => $config->get('Tracking.consentGoogleAdsNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentGoogleAdsIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentGoogleAdsCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showFacebook') === 'true') {
            $consentRepository->registerConsent(
                'gtmFacebook',
                'Tracking::CookieConsent.consentFacebookLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentFacebookDescription',
                    'provider' => 'Tracking::CookieConsent.consentFacebookProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentFacebookLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentFacebookPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupFacebook', 'tracking'),
                    'necessary' => $config->get('Tracking.consentFacebookNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentFacebookIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentFacebookCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showPinterest') === 'true') {
            $consentRepository->registerConsent(
                'gtmPinterest',
                'Tracking::CookieConsent.consentPinterestLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentPinterestDescription',
                    'provider' => 'Tracking::CookieConsent.consentPinterestProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentPinterestLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentPinterestPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupPinterest', 'tracking'),
                    'necessary' => $config->get('Tracking.consentPinterestNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentPinterestIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentPinterestCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showBilligerDe') === 'true') {
            $consentRepository->registerConsent(
                'gtmBilligerDe',
                'Tracking::CookieConsent.consentBilligerDeLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentBilligerDeDescription',
                    'provider' => 'Tracking::CookieConsent.consentBilligerDeProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentBilligerDeLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentBilligerDePolicyUrl',
                    'group' => $config->get('Tracking.consentGroupBilligerDe', 'tracking'),
                    'necessary' => $config->get('Tracking.consentBilligerDeNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentBilligerDeIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentBilligerDeCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showKelkoo') === 'true') {
            $consentRepository->registerConsent(
                'gtmKelkoo',
                'Tracking::CookieConsent.consentKelkooLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentKelkooDescription',
                    'provider' => 'Tracking::CookieConsent.consentKelkooProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentKelkooLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentKelkooPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupKelkoo', 'tracking'),
                    'necessary' => $config->get('Tracking.consentKelkooNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentKelkooIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentKelkooCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showPaypal') === 'true') {
            $consentRepository->registerConsent(
                'gtmPaypal',
                'Tracking::CookieConsent.consentPaypalLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentPaypalDescription',
                    'provider' => 'Tracking::CookieConsent.consentPaypalProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentPaypalLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentPaypalPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupPaypal', 'tracking'),
                    'necessary' => $config->get('Tracking.consentPaypalNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentPaypalIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentPaypalCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showAwin') === 'true') {
            $consentRepository->registerConsent(
                'gtmAwin',
                'Tracking::CookieConsent.consentAwinLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentAwinDescription',
                    'provider' => 'Tracking::CookieConsent.consentAwinProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentAwinLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentAwinPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupAwin', 'tracking'),
                    'necessary' => $config->get('Tracking.consentAwinNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentAwinIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentAwinCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showWebgains') === 'true') {
            $consentRepository->registerConsent(
                'gtmWebgains',
                'Tracking::CookieConsent.consentWebgainsLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentWebgainsDescription',
                    'provider' => 'Tracking::CookieConsent.consentWebgainsProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentWebgainsLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentWebgainsPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupWebgains', 'tracking'),
                    'necessary' => $config->get('Tracking.consentWebgainsNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentWebgainsIsOptOut') === 'true',
                    'cookieNames' => array_map('trim', explode(',', $config->get('Tracking.consentWebgainsCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieOne') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieOne',
                'Tracking::CookieConsent.consentCustomCookieOneLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieOneDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieOneProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieOneLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieOnePolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieOne', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieOneNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieOneIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieOneCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieTwo') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieTwo',
                'Tracking::CookieConsent.consentCustomCookieTwoLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieTwoDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieTwoProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieTwoLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieTwoPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieTwo', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieTwoNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieTwoIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieTwoCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieThree') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieThree',
                'Tracking::CookieConsent.consentCustomCookieThreeLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieThreeDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieThreeProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieThreeLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieThreePolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieThree', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieThreeNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieThreeIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieThreeCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieFour') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieFour',
                'Tracking::CookieConsent.consentCustomCookieFourLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieFourDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieFourProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieFourLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieFourPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieFour', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieFourNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieFourIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieFourCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieFive') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieFive',
                'Tracking::CookieConsent.consentCustomCookieFiveLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieFiveDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieFiveProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieFiveLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieFivePolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieFive', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieFiveNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieFiveIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieFiveCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieSix') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieSix',
                'Tracking::CookieConsent.consentCustomCookieSixLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieSixDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieSixProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieSixLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieSixPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieSix', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieSixNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieSixIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieSixCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieSeven') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieSeven',
                'Tracking::CookieConsent.consentCustomCookieSevenLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieSevenDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieSevenProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieSevenLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieSevenPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieSeven', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieSevenNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieSevenIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieSevenCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieEight') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieEight',
                'Tracking::CookieConsent.consentCustomCookieEightLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieEightDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieEightProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieEightLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieEightPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieEight', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieEightNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieEightIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieEightCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieNine') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieNine',
                'Tracking::CookieConsent.consentCustomCookieNineLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieNineDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieNineProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieNineLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieNinePolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieNine', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieNineNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieNineIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieNineCookieNames')))
                ]
            );
        }

        if ($config->get('Tracking.showCustomCookieTen') === 'true') {
            $consentRepository->registerConsent(
                'gtmCustomCookieTen',
                'Tracking::CookieConsent.consentCustomCookieTenLabel',
                [
                    'description' => 'Tracking::CookieConsent.consentCustomCookieTenDescription',
                    'provider' => 'Tracking::CookieConsent.consentCustomCookieTenProvider',
                    'lifespan' => 'Tracking::CookieConsent.consentCustomCookieTenLifespan',
                    'policyUrl' => 'Tracking::CookieConsent.consentCustomCookieTenPolicyUrl',
                    'group' => $config->get('Tracking.consentGroupCustomCookieTen', 'tracking'),
                    'necessary' => $config->get('Tracking.consentCustomCookieTenNecessary') === 'true',
                    'isOptOut' => $config->get('Tracking.consentCustomCookieTenIsOptOut') === 'true',
                    'cookieNames' =>  array_map('trim', explode(',', $config->get('Tracking.consentCustomCookieTenCookieNames')))
                ]
            );
        }

    }

    /**
     * boot twig extensions and services
     * @param Twig $twig
     * @param Dispatcher $dispatcher
     */
    public function boot(Twig $twig, Dispatcher $dispatcher)
    {
        $dispatcher->listen(OrderCreated::class, function ($event) {
            /** @var FrontendSessionStorageFactoryContract $sessionStorage */
            $sessionStorage = pluginApp(FrontendSessionStorageFactoryContract::class);
            $sessionStorage->getPlugin()->setValue('GTM_TRACK_ORDER', 1);
        }, 0);
    }

}
