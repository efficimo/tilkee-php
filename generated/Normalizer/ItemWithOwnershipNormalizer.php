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
class ItemWithOwnershipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Tilkee\\API\\Model\\ItemWithOwnership') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Tilkee\API\Model\ItemWithOwnership) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Tilkee\API\Model\ItemWithOwnership();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'usable')) {
            $object->setUsable($data->{'usable'});
        }
        if (property_exists($data, 'element_type')) {
            $object->setElementType($data->{'element_type'});
        }
        if (property_exists($data, 'extension')) {
            $object->setExtension($data->{'extension'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'external_id')) {
            $object->setExternalId($data->{'external_id'});
        }
        if (property_exists($data, 's3_url')) {
            $object->setS3Url($data->{'s3_url'});
        }
        if (property_exists($data, 'content_url')) {
            $object->setContentUrl($data->{'content_url'});
        }
        if (property_exists($data, 'thumbnail_url')) {
            $object->setThumbnailUrl($data->{'thumbnail_url'});
        }
        if (property_exists($data, 'visible')) {
            $object->setVisible($data->{'visible'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.uP", $data->{'created_at'}));
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->denormalizer->denormalize($data->{'owner'}, 'Tilkee\\API\\Model\\User', 'json', $context));
        }
        if (property_exists($data, 'projects')) {
            $values = array();
            foreach ($data->{'projects'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Tilkee\\API\\Model\\ItemWithOwnershipprojectsItem', 'json', $context);
            }
            $object->setProjects($values);
        }
        if (property_exists($data, 'projects_count')) {
            $object->setProjectsCount($data->{'projects_count'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getUsable()) {
            $data->{'usable'} = $object->getUsable();
        }
        if (null !== $object->getElementType()) {
            $data->{'element_type'} = $object->getElementType();
        }
        if (null !== $object->getExtension()) {
            $data->{'extension'} = $object->getExtension();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getExternalId()) {
            $data->{'external_id'} = $object->getExternalId();
        }
        if (null !== $object->getS3Url()) {
            $data->{'s3_url'} = $object->getS3Url();
        }
        if (null !== $object->getContentUrl()) {
            $data->{'content_url'} = $object->getContentUrl();
        }
        if (null !== $object->getThumbnailUrl()) {
            $data->{'thumbnail_url'} = $object->getThumbnailUrl();
        }
        if (null !== $object->getVisible()) {
            $data->{'visible'} = $object->getVisible();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s.uP");
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getProjects()) {
            $values = array();
            foreach ($object->getProjects() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'projects'} = $values;
        }
        if (null !== $object->getProjectsCount()) {
            $data->{'projects_count'} = $object->getProjectsCount();
        }
        return $data;
    }
}