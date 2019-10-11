<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UploadInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\UploadInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\UploadInformation' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\UploadInformation();
        if (property_exists($data, 'key') && null !== $data->{'key'}) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'acl') && null !== $data->{'acl'}) {
            $object->setAcl($data->{'acl'});
        }
        if (property_exists($data, 'policy') && null !== $data->{'policy'}) {
            $object->setPolicy($data->{'policy'});
        }
        if (property_exists($data, 'signature') && null !== $data->{'signature'}) {
            $object->setSignature($data->{'signature'});
        }
        if (property_exists($data, 'AWSAccessKeyId') && null !== $data->{'AWSAccessKeyId'}) {
            $object->setAWSAccessKeyId($data->{'AWSAccessKeyId'});
        }
        if (property_exists($data, 'success_action_status') && null !== $data->{'success_action_status'}) {
            $object->setSuccessActionStatus($data->{'success_action_status'});
        }
        if (property_exists($data, 's3_endpoint') && null !== $data->{'s3_endpoint'}) {
            $object->setS3Endpoint($data->{'s3_endpoint'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getKey()) {
            $data->{'key'} = $object->getKey();
        }
        if (null !== $object->getAcl()) {
            $data->{'acl'} = $object->getAcl();
        }
        if (null !== $object->getPolicy()) {
            $data->{'policy'} = $object->getPolicy();
        }
        if (null !== $object->getSignature()) {
            $data->{'signature'} = $object->getSignature();
        }
        if (null !== $object->getAWSAccessKeyId()) {
            $data->{'AWSAccessKeyId'} = $object->getAWSAccessKeyId();
        }
        if (null !== $object->getSuccessActionStatus()) {
            $data->{'success_action_status'} = $object->getSuccessActionStatus();
        }
        if (null !== $object->getS3Endpoint()) {
            $data->{'s3_endpoint'} = $object->getS3Endpoint();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }

        return $data;
    }
}
