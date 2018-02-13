<?php

namespace HbsResearch\Tilkee\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ProjectListResponseNormalizer();
        $normalizers[] = new ProjectDuplicateQueryNormalizer();
        $normalizers[] = new ProjectArchiveQueryNormalizer();
        $normalizers[] = new ProjectRemoveItemsQueryNormalizer();
        $normalizers[] = new ProjectItemNormalizer();
        $normalizers[] = new ProjectItemCollectionNormalizer();
        $normalizers[] = new ItemFromS3Normalizer();
        $normalizers[] = new ItemFromURLNormalizer();
        $normalizers[] = new ItemFromContentNormalizer();
        $normalizers[] = new ItemNormalizer();
        $normalizers[] = new ItemProjectsItemNormalizer();
        $normalizers[] = new ItemListResponseNormalizer();
        $normalizers[] = new ThemeNormalizer();
        $normalizers[] = new LeaderNormalizer();
        $normalizers[] = new TokenNormalizer();
        $normalizers[] = new TokenSignedDocsItemNormalizer();
        $normalizers[] = new TokenListResponseNormalizer();
        $normalizers[] = new CreateTokenQueryNormalizer();
        $normalizers[] = new TokenRecipientNormalizer();
        $normalizers[] = new CreateTokenResponseNormalizer();
        $normalizers[] = new TokenUpdateQueryNormalizer();
        $normalizers[] = new DeviceNormalizer();
        $normalizers[] = new CollaboratorNormalizer();
        $normalizers[] = new UserNormalizer();
        $normalizers[] = new UserUtmItemNormalizer();
        $normalizers[] = new UserUtmItemUTMNormalizer();
        $normalizers[] = new UserProfileNormalizer();
        $normalizers[] = new CompanyNormalizer();
        $normalizers[] = new CompanyCustomBrandingNormalizer();
        $normalizers[] = new CompanyCustomBrandingOnboardingVideosUrlNormalizer();
        $normalizers[] = new UploadInformationNormalizer();
        return $normalizers;
    }
}