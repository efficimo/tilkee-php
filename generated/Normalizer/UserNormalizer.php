<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\User' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\User' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\User();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'first_name') && null !== $data->{'first_name'}) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name') && null !== $data->{'last_name'}) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'full_name') && null !== $data->{'full_name'}) {
            $object->setFullName($data->{'full_name'});
        }
        if (property_exists($data, 'email') && null !== $data->{'email'}) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'phone_number') && null !== $data->{'phone_number'}) {
            $object->setPhoneNumber($data->{'phone_number'});
        }
        if (property_exists($data, 'cell_phone_number') && null !== $data->{'cell_phone_number'}) {
            $object->setCellPhoneNumber($data->{'cell_phone_number'});
        }
        if (property_exists($data, 'contact_email') && null !== $data->{'contact_email'}) {
            $object->setContactEmail($data->{'contact_email'});
        }
        if (property_exists($data, 'should_receive_emails') && null !== $data->{'should_receive_emails'}) {
            $object->setShouldReceiveEmails($data->{'should_receive_emails'});
        }
        if (property_exists($data, 'level_id') && null !== $data->{'level_id'}) {
            $object->setLevelId($data->{'level_id'});
        }
        if (property_exists($data, 'support_end_date') && null !== $data->{'support_end_date'}) {
            $object->setSupportEndDate($data->{'support_end_date'});
        }
        if (property_exists($data, 'devices') && null !== $data->{'devices'}) {
            $values = array();
            foreach ($data->{'devices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'HbsResearch\\Tilkee\\API\\Model\\Device', 'json', $context);
            }
            $object->setDevices($values);
        }
        if (property_exists($data, 'locale') && null !== $data->{'locale'}) {
            $object->setLocale($data->{'locale'});
        }
        if (property_exists($data, 'should_receive_connexion_email') && null !== $data->{'should_receive_connexion_email'}) {
            $object->setShouldReceiveConnexionEmail($data->{'should_receive_connexion_email'});
        }
        if (property_exists($data, 'frequency_proposal_sumup_email') && null !== $data->{'frequency_proposal_sumup_email'}) {
            $object->setFrequencyProposalSumupEmail($data->{'frequency_proposal_sumup_email'});
        }
        if (property_exists($data, 'position') && null !== $data->{'position'}) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'avatar') && null !== $data->{'avatar'}) {
            $object->setAvatar($data->{'avatar'});
        }
        if (property_exists($data, 'linkedin_account_url') && null !== $data->{'linkedin_account_url'}) {
            $object->setLinkedinAccountUrl($data->{'linkedin_account_url'});
        }
        if (property_exists($data, 'twitter_account_url') && null !== $data->{'twitter_account_url'}) {
            $object->setTwitterAccountUrl($data->{'twitter_account_url'});
        }
        if (property_exists($data, 'facebook_account_url') && null !== $data->{'facebook_account_url'}) {
            $object->setFacebookAccountUrl($data->{'facebook_account_url'});
        }
        if (property_exists($data, 'is_owner') && null !== $data->{'is_owner'}) {
            $object->setIsOwner($data->{'is_owner'});
        }
        if (property_exists($data, 'can_see_stats') && null !== $data->{'can_see_stats'}) {
            $object->setCanSeeStats($data->{'can_see_stats'});
        }
        if (property_exists($data, 'last_sign_in_at') && null !== $data->{'last_sign_in_at'}) {
            $object->setLastSignInAt($data->{'last_sign_in_at'});
        }
        if (property_exists($data, 'referral_token') && null !== $data->{'referral_token'}) {
            $object->setReferralToken($data->{'referral_token'});
        }
        if (property_exists($data, 'convert_token') && null !== $data->{'convert_token'}) {
            $object->setConvertToken($data->{'convert_token'});
        }
        if (property_exists($data, 'dj_json_id') && null !== $data->{'dj_json_id'}) {
            $object->setDjJsonId($data->{'dj_json_id'});
        }
        if (property_exists($data, 'password_changed_at') && null !== $data->{'password_changed_at'}) {
            $object->setPasswordChangedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'password_changed_at'}));
        }
        if (property_exists($data, 'created_at') && null !== $data->{'created_at'}) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'updated_at'}));
        }
        if (property_exists($data, 'company_id') && null !== $data->{'company_id'}) {
            $object->setCompanyId($data->{'company_id'});
        }
        if (property_exists($data, 'deleted_at') && null !== $data->{'deleted_at'}) {
            $object->setDeletedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'deleted_at'}));
        }
        if (property_exists($data, 'proposal_sumup_sent_at') && null !== $data->{'proposal_sumup_sent_at'}) {
            $object->setProposalSumupSentAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'proposal_sumup_sent_at'}));
        }
        if (property_exists($data, 'sf_id') && null !== $data->{'sf_id'}) {
            $object->setSfId($data->{'sf_id'});
        }
        if (property_exists($data, 'frequency_noread_sumup_email') && null !== $data->{'frequency_noread_sumup_email'}) {
            $object->setFrequencyNoreadSumupEmail($data->{'frequency_noread_sumup_email'});
        }
        if (property_exists($data, 'intercom_id') && null !== $data->{'intercom_id'}) {
            $object->setIntercomId($data->{'intercom_id'});
        }
        if (property_exists($data, 'default_theme_id') && null !== $data->{'default_theme_id'}) {
            $object->setDefaultThemeId($data->{'default_theme_id'});
        }
        if (property_exists($data, 'utm') && null !== $data->{'utm'}) {
            $values_1 = array();
            foreach ($data->{'utm'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'HbsResearch\\Tilkee\\API\\Model\\UserUtmItem', 'json', $context);
            }
            $object->setUtm($values_1);
        }
        if (property_exists($data, 'rights') && null !== $data->{'rights'}) {
            $values_2 = array();
            foreach ($data->{'rights'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRights($values_2);
        }
        if (property_exists($data, 'profile') && null !== $data->{'profile'}) {
            $object->setProfile($this->denormalizer->denormalize($data->{'profile'}, 'HbsResearch\\Tilkee\\API\\Model\\UserProfile', 'json', $context));
        }
        if (property_exists($data, 'location') && null !== $data->{'location'}) {
            $object->setLocation($data->{'location'});
        }
        if (property_exists($data, 'company') && null !== $data->{'company'}) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'HbsResearch\\Tilkee\\API\\Model\\Company', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getFullName()) {
            $data->{'full_name'} = $object->getFullName();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getPhoneNumber()) {
            $data->{'phone_number'} = $object->getPhoneNumber();
        }
        if (null !== $object->getCellPhoneNumber()) {
            $data->{'cell_phone_number'} = $object->getCellPhoneNumber();
        }
        if (null !== $object->getContactEmail()) {
            $data->{'contact_email'} = $object->getContactEmail();
        }
        if (null !== $object->getShouldReceiveEmails()) {
            $data->{'should_receive_emails'} = $object->getShouldReceiveEmails();
        }
        if (null !== $object->getLevelId()) {
            $data->{'level_id'} = $object->getLevelId();
        }
        if (null !== $object->getSupportEndDate()) {
            $data->{'support_end_date'} = $object->getSupportEndDate();
        }
        if (null !== $object->getDevices()) {
            $values = array();
            foreach ($object->getDevices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'devices'} = $values;
        }
        if (null !== $object->getLocale()) {
            $data->{'locale'} = $object->getLocale();
        }
        if (null !== $object->getShouldReceiveConnexionEmail()) {
            $data->{'should_receive_connexion_email'} = $object->getShouldReceiveConnexionEmail();
        }
        if (null !== $object->getFrequencyProposalSumupEmail()) {
            $data->{'frequency_proposal_sumup_email'} = $object->getFrequencyProposalSumupEmail();
        }
        $data->{'position'} = $object->getPosition();
        $data->{'avatar'} = $object->getAvatar();
        if (null !== $object->getLinkedinAccountUrl()) {
            $data->{'linkedin_account_url'} = $object->getLinkedinAccountUrl();
        }
        if (null !== $object->getTwitterAccountUrl()) {
            $data->{'twitter_account_url'} = $object->getTwitterAccountUrl();
        }
        if (null !== $object->getFacebookAccountUrl()) {
            $data->{'facebook_account_url'} = $object->getFacebookAccountUrl();
        }
        if (null !== $object->getIsOwner()) {
            $data->{'is_owner'} = $object->getIsOwner();
        }
        if (null !== $object->getCanSeeStats()) {
            $data->{'can_see_stats'} = $object->getCanSeeStats();
        }
        if (null !== $object->getLastSignInAt()) {
            $data->{'last_sign_in_at'} = $object->getLastSignInAt();
        }
        if (null !== $object->getReferralToken()) {
            $data->{'referral_token'} = $object->getReferralToken();
        }
        if (null !== $object->getConvertToken()) {
            $data->{'convert_token'} = $object->getConvertToken();
        }
        if (null !== $object->getDjJsonId()) {
            $data->{'dj_json_id'} = $object->getDjJsonId();
        }
        if (null !== $object->getPasswordChangedAt()) {
            $data->{'password_changed_at'} = $object->getPasswordChangedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getCompanyId()) {
            $data->{'company_id'} = $object->getCompanyId();
        }
        if (null !== $object->getDeletedAt()) {
            $data->{'deleted_at'} = $object->getDeletedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getProposalSumupSentAt()) {
            $data->{'proposal_sumup_sent_at'} = $object->getProposalSumupSentAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getSfId()) {
            $data->{'sf_id'} = $object->getSfId();
        }
        if (null !== $object->getFrequencyNoreadSumupEmail()) {
            $data->{'frequency_noread_sumup_email'} = $object->getFrequencyNoreadSumupEmail();
        }
        if (null !== $object->getIntercomId()) {
            $data->{'intercom_id'} = $object->getIntercomId();
        }
        if (null !== $object->getDefaultThemeId()) {
            $data->{'default_theme_id'} = $object->getDefaultThemeId();
        }
        if (null !== $object->getUtm()) {
            $values_1 = array();
            foreach ($object->getUtm() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'utm'} = $values_1;
        }
        if (null !== $object->getRights()) {
            $values_2 = array();
            foreach ($object->getRights() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'rights'} = $values_2;
        }
        if (null !== $object->getProfile()) {
            $data->{'profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $object->getLocation();
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }

        return $data;
    }
}
