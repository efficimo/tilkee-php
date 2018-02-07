<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'HbsResearch\\Tilkee\\API\\Model\\Company') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \HbsResearch\Tilkee\API\Model\Company) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \HbsResearch\Tilkee\API\Model\Company();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'users_to_charge_counter')) {
            $object->setUsersToChargeCounter($data->{'users_to_charge_counter'});
        }
        if (property_exists($data, 'have_yousign')) {
            $object->setHaveYousign($data->{'have_yousign'});
        }
        if (property_exists($data, 'have_management')) {
            $object->setHaveManagement($data->{'have_management'});
        }
        if (property_exists($data, 'has_custom_branding')) {
            $object->setHasCustomBranding($data->{'has_custom_branding'});
        }
        if (property_exists($data, 'company_rights')) {
            $values = array();
            foreach ($data->{'company_rights'} as $value) {
                $values[] = $value;
            }
            $object->setCompanyRights($values);
        }
        if (property_exists($data, 'nb_employees')) {
            $object->setNbEmployees($data->{'nb_employees'});
        }
        if (property_exists($data, 'has_proabono')) {
            $object->setHasProabono($data->{'has_proabono'});
        }
        if (property_exists($data, 'subscription_has_payment')) {
            $object->setSubscriptionHasPayment($data->{'subscription_has_payment'});
        }
        if (property_exists($data, 'subscription_segment')) {
            $object->setSubscriptionSegment($data->{'subscription_segment'});
        }
        if (property_exists($data, 'slimpay_validated')) {
            $object->setSlimpayValidated($data->{'slimpay_validated'});
        }
        if (property_exists($data, 'subscription_trial_date')) {
            $object->setSubscriptionTrialDate(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'subscription_trial_date'}));
        }
        if (property_exists($data, 'default_theme_id')) {
            $object->setDefaultThemeId($data->{'default_theme_id'});
        }
        if (property_exists($data, 'usable_domains')) {
            $values_1 = array();
            foreach ($data->{'usable_domains'} as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setUsableDomains($values_1);
        }
        if (property_exists($data, 'geoloc_activate')) {
            $object->setGeolocActivate($data->{'geoloc_activate'});
        }
        if (property_exists($data, 'custom_branding')) {
            $object->setCustomBranding($this->denormalizer->denormalize($data->{'custom_branding'}, 'HbsResearch\\Tilkee\\API\\Model\\CompanyCustomBranding', 'json', $context));
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($data->{'location'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getUsersToChargeCounter()) {
            $data->{'users_to_charge_counter'} = $object->getUsersToChargeCounter();
        }
        if (null !== $object->getHaveYousign()) {
            $data->{'have_yousign'} = $object->getHaveYousign();
        }
        if (null !== $object->getHaveManagement()) {
            $data->{'have_management'} = $object->getHaveManagement();
        }
        if (null !== $object->getHasCustomBranding()) {
            $data->{'has_custom_branding'} = $object->getHasCustomBranding();
        }
        if (null !== $object->getCompanyRights()) {
            $values = array();
            foreach ($object->getCompanyRights() as $value) {
                $values[] = $value;
            }
            $data->{'company_rights'} = $values;
        }
        if (null !== $object->getNbEmployees()) {
            $data->{'nb_employees'} = $object->getNbEmployees();
        }
        if (null !== $object->getHasProabono()) {
            $data->{'has_proabono'} = $object->getHasProabono();
        }
        if (null !== $object->getSubscriptionHasPayment()) {
            $data->{'subscription_has_payment'} = $object->getSubscriptionHasPayment();
        }
        if (null !== $object->getSubscriptionSegment()) {
            $data->{'subscription_segment'} = $object->getSubscriptionSegment();
        }
        if (null !== $object->getSlimpayValidated()) {
            $data->{'slimpay_validated'} = $object->getSlimpayValidated();
        }
        if (null !== $object->getSubscriptionTrialDate()) {
            $data->{'subscription_trial_date'} = $object->getSubscriptionTrialDate()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getDefaultThemeId()) {
            $data->{'default_theme_id'} = $object->getDefaultThemeId();
        }
        if (null !== $object->getUsableDomains()) {
            $values_1 = array();
            foreach ($object->getUsableDomains() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data->{'usable_domains'} = $values_1;
        }
        if (null !== $object->getGeolocActivate()) {
            $data->{'geoloc_activate'} = $object->getGeolocActivate();
        }
        if (null !== $object->getCustomBranding()) {
            $data->{'custom_branding'} = $this->normalizer->normalize($object->getCustomBranding(), 'json', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $object->getLocation();
        }
        return $data;
    }
}