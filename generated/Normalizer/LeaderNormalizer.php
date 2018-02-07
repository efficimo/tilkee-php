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
class LeaderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'HbsResearch\\Tilkee\\API\\Model\\Leader') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \HbsResearch\Tilkee\API\Model\Leader) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \HbsResearch\Tilkee\API\Model\Leader();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'first_name')) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name')) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'full_name')) {
            $object->setFullName($data->{'full_name'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'cell_phone_number')) {
            $object->setCellPhoneNumber($data->{'cell_phone_number'});
        }
        if (property_exists($data, 'phone_number')) {
            $object->setPhoneNumber($data->{'phone_number'});
        }
        if (property_exists($data, 'contact_email')) {
            $object->setContactEmail($data->{'contact_email'});
        }
        if (property_exists($data, 'should_receive_emails')) {
            $object->setShouldReceiveEmails($data->{'should_receive_emails'});
        }
        if (property_exists($data, 'level_id')) {
            $object->setLevelId($data->{'level_id'});
        }
        if (property_exists($data, 'devices')) {
            $values = array();
            foreach ($data->{'devices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'HbsResearch\\Tilkee\\API\\Model\\Device', 'json', $context);
            }
            $object->setDevices($values);
        }
        if (property_exists($data, 'is_owner')) {
            $object->setIsOwner($data->{'is_owner'});
        }
        if (property_exists($data, 'is_orange_user')) {
            $object->setIsOrangeUser($data->{'is_orange_user'});
        }
        if (property_exists($data, 'locale')) {
            $object->setLocale($data->{'locale'});
        }
        if (property_exists($data, 'should_receive_connexion_email')) {
            $object->setShouldReceiveConnexionEmail($data->{'should_receive_connexion_email'});
        }
        if (property_exists($data, 'frequency_proposal_sumup_email')) {
            $object->setFrequencyProposalSumupEmail($data->{'frequency_proposal_sumup_email'});
        }
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'avatar')) {
            $object->setAvatar($data->{'avatar'});
        }
        if (property_exists($data, 'linkedin_account_url')) {
            $object->setLinkedinAccountUrl($data->{'linkedin_account_url'});
        }
        if (property_exists($data, 'twitter_account_url')) {
            $object->setTwitterAccountUrl($data->{'twitter_account_url'});
        }
        if (property_exists($data, 'facebook_account_url')) {
            $object->setFacebookAccountUrl($data->{'facebook_account_url'});
        }
        if (property_exists($data, 'last_sign_in_at')) {
            $value_1 = $data->{'last_sign_in_at'};
            if (is_int($data->{'last_sign_in_at'})) {
                $value_1 = $data->{'last_sign_in_at'};
            }
            if (isset($data->{'last_sign_in_at'})) {
                $value_1 = $data->{'last_sign_in_at'};
            }
            $object->setLastSignInAt($value_1);
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
        if (null !== $object->getCellPhoneNumber()) {
            $data->{'cell_phone_number'} = $object->getCellPhoneNumber();
        }
        if (null !== $object->getPhoneNumber()) {
            $data->{'phone_number'} = $object->getPhoneNumber();
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
        if (null !== $object->getDevices()) {
            $values = array();
            foreach ($object->getDevices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'devices'} = $values;
        }
        if (null !== $object->getIsOwner()) {
            $data->{'is_owner'} = $object->getIsOwner();
        }
        if (null !== $object->getIsOrangeUser()) {
            $data->{'is_orange_user'} = $object->getIsOrangeUser();
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
        if (null !== $object->getPosition()) {
            $data->{'position'} = $object->getPosition();
        }
        if (null !== $object->getAvatar()) {
            $data->{'avatar'} = $object->getAvatar();
        }
        if (null !== $object->getLinkedinAccountUrl()) {
            $data->{'linkedin_account_url'} = $object->getLinkedinAccountUrl();
        }
        if (null !== $object->getTwitterAccountUrl()) {
            $data->{'twitter_account_url'} = $object->getTwitterAccountUrl();
        }
        if (null !== $object->getFacebookAccountUrl()) {
            $data->{'facebook_account_url'} = $object->getFacebookAccountUrl();
        }
        if (null !== $object->getLastSignInAt()) {
            $value_1 = $object->getLastSignInAt();
            if (is_int($object->getLastSignInAt())) {
                $value_1 = $object->getLastSignInAt();
            }
            if (!is_null($object->getLastSignInAt())) {
                $value_1 = $object->getLastSignInAt();
            }
            $data->{'last_sign_in_at'} = $value_1;
        }
        return $data;
    }
}