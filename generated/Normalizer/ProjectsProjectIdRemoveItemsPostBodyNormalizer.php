<?php

namespace HbsResearch\Tilkee\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProjectsProjectIdRemoveItemsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectsProjectIdRemoveItemsPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return 'HbsResearch\\Tilkee\\API\\Model\\ProjectsProjectIdRemoveItemsPostBody' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \HbsResearch\Tilkee\API\Model\ProjectsProjectIdRemoveItemsPostBody();
        if (property_exists($data, 'project_items_ids') && null !== $data->{'project_items_ids'}) {
            $values = array();
            foreach ($data->{'project_items_ids'} as $value) {
                $values[] = $value;
            }
            $object->setProjectItemsIds($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getProjectItemsIds()) {
            $values = array();
            foreach ($object->getProjectItemsIds() as $value) {
                $values[] = $value;
            }
            $data->{'project_items_ids'} = $values;
        }

        return $data;
    }
}
