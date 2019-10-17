<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class WrapperTokenFromFilesPostBodyDocumentsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\WrapperTokenFromFilesPostBodyDocumentsItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\WrapperTokenFromFilesPostBodyDocumentsItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\WrapperTokenFromFilesPostBodyDocumentsItem();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 's3_url') && null !== $data->{'s3_url'}) {
            $object->setS3Url($data->{'s3_url'});
        }
        if (property_exists($data, 'signable') && null !== $data->{'signable'}) {
            $object->setSignable($data->{'signable'});
        }
        if (property_exists($data, 'downloadable') && null !== $data->{'downloadable'}) {
            $object->setDownloadable($data->{'downloadable'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getS3Url()) {
            $data->{'s3_url'} = $object->getS3Url();
        }
        if (null !== $object->getSignable()) {
            $data->{'signable'} = $object->getSignable();
        }
        if (null !== $object->getDownloadable()) {
            $data->{'downloadable'} = $object->getDownloadable();
        }

        return $data;
    }
}
