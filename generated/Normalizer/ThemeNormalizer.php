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
class ThemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'HbsResearch\\Tilkee\\API\\Model\\Theme') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \HbsResearch\Tilkee\API\Model\Theme) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \HbsResearch\Tilkee\API\Model\Theme();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'logo')) {
            $object->setLogo($data->{'logo'});
        }
        if (property_exists($data, 'main_color')) {
            $object->setMainColor($data->{'main_color'});
        }
        if (property_exists($data, 'secondary_color')) {
            $object->setSecondaryColor($data->{'secondary_color'});
        }
        if (property_exists($data, 'text_color')) {
            $object->setTextColor($data->{'text_color'});
        }
        if (property_exists($data, 'default')) {
            $object->setDefault($data->{'default'});
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
        if (null !== $object->getLogo()) {
            $data->{'logo'} = $object->getLogo();
        }
        if (null !== $object->getMainColor()) {
            $data->{'main_color'} = $object->getMainColor();
        }
        if (null !== $object->getSecondaryColor()) {
            $data->{'secondary_color'} = $object->getSecondaryColor();
        }
        if (null !== $object->getTextColor()) {
            $data->{'text_color'} = $object->getTextColor();
        }
        if (null !== $object->getDefault()) {
            $data->{'default'} = $object->getDefault();
        }
        return $data;
    }
}