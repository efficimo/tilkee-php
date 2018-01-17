<?php

namespace Tilkee\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyCustomBrandingOnboardingVideosUrlNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Tilkee\\API\\Model\\CompanyCustomBrandingOnboardingVideosUrl') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Tilkee\API\Model\CompanyCustomBrandingOnboardingVideosUrl) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tilkee\API\Model\CompanyCustomBrandingOnboardingVideosUrl();
        if (property_exists($data, 'en')) {
            $object->setEn($data->{'en'});
        }
        if (property_exists($data, 'de')) {
            $object->setDe($data->{'de'});
        }
        if (property_exists($data, 'fr')) {
            $object->setFr($data->{'fr'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getEn()) {
            $data->{'en'} = $object->getEn();
        }
        if (null !== $object->getDe()) {
            $data->{'de'} = $object->getDe();
        }
        if (null !== $object->getFr()) {
            $data->{'fr'} = $object->getFr();
        }
        return $data;
    }
}