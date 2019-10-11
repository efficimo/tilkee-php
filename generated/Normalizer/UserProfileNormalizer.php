<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\UserProfile' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\UserProfile' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\UserProfile();
        if (property_exists($data, 'should_receive_emails') && null !== $data->{'should_receive_emails'}) {
            $object->setShouldReceiveEmails($data->{'should_receive_emails'});
        }
        if (property_exists($data, 'should_receive_connexion_email') && null !== $data->{'should_receive_connexion_email'}) {
            $object->setShouldReceiveConnexionEmail($data->{'should_receive_connexion_email'});
        }
        if (property_exists($data, 'csv_rate_limit') && null !== $data->{'csv_rate_limit'}) {
            $object->setCsvRateLimit($data->{'csv_rate_limit'});
        }
        if (property_exists($data, 'receive_default_notif_contact_email') && null !== $data->{'receive_default_notif_contact_email'}) {
            $object->setReceiveDefaultNotifContactEmail($data->{'receive_default_notif_contact_email'});
        }
        if (property_exists($data, 'has_default_pointer') && null !== $data->{'has_default_pointer'}) {
            $object->setHasDefaultPointer($data->{'has_default_pointer'});
        }
        if (property_exists($data, 'legal_overlay_rights') && null !== $data->{'legal_overlay_rights'}) {
            $object->setLegalOverlayRights($data->{'legal_overlay_rights'});
        }
        if (property_exists($data, 'retention') && null !== $data->{'retention'}) {
            $object->setRetention($data->{'retention'});
        }
        if (property_exists($data, 'retention_delay') && null !== $data->{'retention_delay'}) {
            $object->setRetentionDelay($data->{'retention_delay'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getShouldReceiveEmails()) {
            $data->{'should_receive_emails'} = $object->getShouldReceiveEmails();
        }
        if (null !== $object->getShouldReceiveConnexionEmail()) {
            $data->{'should_receive_connexion_email'} = $object->getShouldReceiveConnexionEmail();
        }
        if (null !== $object->getCsvRateLimit()) {
            $data->{'csv_rate_limit'} = $object->getCsvRateLimit();
        }
        if (null !== $object->getReceiveDefaultNotifContactEmail()) {
            $data->{'receive_default_notif_contact_email'} = $object->getReceiveDefaultNotifContactEmail();
        }
        if (null !== $object->getHasDefaultPointer()) {
            $data->{'has_default_pointer'} = $object->getHasDefaultPointer();
        }
        if (null !== $object->getLegalOverlayRights()) {
            $data->{'legal_overlay_rights'} = $object->getLegalOverlayRights();
        }
        if (null !== $object->getRetention()) {
            $data->{'retention'} = $object->getRetention();
        }
        if (null !== $object->getRetentionDelay()) {
            $data->{'retention_delay'} = $object->getRetentionDelay();
        }

        return $data;
    }
}
