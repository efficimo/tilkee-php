<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanyCustomBrandingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBranding' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBranding' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\CompanyCustomBranding();
        if (property_exists($data, 'access_referral') && null !== $data->{'access_referral'}) {
            $object->setAccessReferral($data->{'access_referral'});
        }
        if (property_exists($data, 'access_web_notifications') && null !== $data->{'access_web_notifications'}) {
            $object->setAccessWebNotifications($data->{'access_web_notifications'});
        }
        if (property_exists($data, 'access_subscription') && null !== $data->{'access_subscription'}) {
            $object->setAccessSubscription($data->{'access_subscription'});
        }
        if (property_exists($data, 'excel_upload') && null !== $data->{'excel_upload'}) {
            $object->setExcelUpload($data->{'excel_upload'});
        }
        if (property_exists($data, 'has_support') && null !== $data->{'has_support'}) {
            $object->setHasSupport($data->{'has_support'});
        }
        if (property_exists($data, 'product_map') && null !== $data->{'product_map'}) {
            $object->setProductMap($data->{'product_map'});
        }
        if (property_exists($data, 'access_tab_collaborators') && null !== $data->{'access_tab_collaborators'}) {
            $object->setAccessTabCollaborators($data->{'access_tab_collaborators'});
        }
        if (property_exists($data, 'collaborators_upsell') && null !== $data->{'collaborators_upsell'}) {
            $object->setCollaboratorsUpsell($data->{'collaborators_upsell'});
        }
        if (property_exists($data, 'alert_subscription') && null !== $data->{'alert_subscription'}) {
            $object->setAlertSubscription($data->{'alert_subscription'});
        }
        if (property_exists($data, 'excel_upsell') && null !== $data->{'excel_upsell'}) {
            $object->setExcelUpsell($data->{'excel_upsell'});
        }
        if (property_exists($data, 'product_title') && null !== $data->{'product_title'}) {
            $object->setProductTitle($data->{'product_title'});
        }
        if (property_exists($data, 'onboarding_videos_url') && null !== $data->{'onboarding_videos_url'}) {
            $object->setOnboardingVideosUrl($this->denormalizer->denormalize($data->{'onboarding_videos_url'}, 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBrandingOnboardingVideosUrl', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAccessReferral()) {
            $data->{'access_referral'} = $object->getAccessReferral();
        }
        if (null !== $object->getAccessWebNotifications()) {
            $data->{'access_web_notifications'} = $object->getAccessWebNotifications();
        }
        if (null !== $object->getAccessSubscription()) {
            $data->{'access_subscription'} = $object->getAccessSubscription();
        }
        if (null !== $object->getExcelUpload()) {
            $data->{'excel_upload'} = $object->getExcelUpload();
        }
        if (null !== $object->getHasSupport()) {
            $data->{'has_support'} = $object->getHasSupport();
        }
        if (null !== $object->getProductMap()) {
            $data->{'product_map'} = $object->getProductMap();
        }
        if (null !== $object->getAccessTabCollaborators()) {
            $data->{'access_tab_collaborators'} = $object->getAccessTabCollaborators();
        }
        if (null !== $object->getCollaboratorsUpsell()) {
            $data->{'collaborators_upsell'} = $object->getCollaboratorsUpsell();
        }
        if (null !== $object->getAlertSubscription()) {
            $data->{'alert_subscription'} = $object->getAlertSubscription();
        }
        if (null !== $object->getExcelUpsell()) {
            $data->{'excel_upsell'} = $object->getExcelUpsell();
        }
        if (null !== $object->getProductTitle()) {
            $data->{'product_title'} = $object->getProductTitle();
        }
        if (null !== $object->getOnboardingVideosUrl()) {
            $data->{'onboarding_videos_url'} = $this->normalizer->normalize($object->getOnboardingVideosUrl(), 'json', $context);
        }

        return $data;
    }
}
