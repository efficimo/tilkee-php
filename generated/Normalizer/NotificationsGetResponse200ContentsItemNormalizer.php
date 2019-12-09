<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NotificationsGetResponse200ContentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\NotificationsGetResponse200ContentsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\NotificationsGetResponse200ContentsItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\NotificationsGetResponse200ContentsItem();
        if (property_exists($data, 'url') && null !== $data->{'url'}) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'rule') && null !== $data->{'rule'}) {
            $object->setRule($data->{'rule'});
        }
        if (property_exists($data, 'target') && null !== $data->{'target'}) {
            $object->setTarget($data->{'target'});
        }
        if (property_exists($data, 'company_id') && null !== $data->{'company_id'}) {
            $object->setCompanyId($data->{'company_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getRule()) {
            $data->{'rule'} = $object->getRule();
        }
        if (null !== $object->getTarget()) {
            $data->{'target'} = $object->getTarget();
        }
        if (null !== $object->getCompanyId()) {
            $data->{'company_id'} = $object->getCompanyId();
        }

        return $data;
    }
}
