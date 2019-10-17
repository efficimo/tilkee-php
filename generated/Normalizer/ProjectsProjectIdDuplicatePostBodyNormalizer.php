<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectsProjectIdDuplicatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectsProjectIdDuplicatePostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'HbsResearch\\Tilkee\\API\\Model\\ProjectsProjectIdDuplicatePostBody' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ProjectsProjectIdDuplicatePostBody();
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'can_be_downloaded') && null !== $data->{'can_be_downloaded'}) {
            $object->setCanBeDownloaded($data->{'can_be_downloaded'});
        }
        if (property_exists($data, 'archived_at') && null !== $data->{'archived_at'}) {
            $object->setArchivedAt($data->{'archived_at'});
        }
        if (property_exists($data, 'should_duplicate_assignments') && null !== $data->{'should_duplicate_assignments'}) {
            $object->setShouldDuplicateAssignments($data->{'should_duplicate_assignments'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getCanBeDownloaded()) {
            $data->{'can_be_downloaded'} = $object->getCanBeDownloaded();
        }
        if (null !== $object->getArchivedAt()) {
            $data->{'archived_at'} = $object->getArchivedAt();
        }
        if (null !== $object->getShouldDuplicateAssignments()) {
            $data->{'should_duplicate_assignments'} = $object->getShouldDuplicateAssignments();
        }

        return $data;
    }
}
