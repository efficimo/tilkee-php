<?php

namespace Tilkee\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ProjectCommonNormalizer();
        $normalizers[] = new ProjectDetailNormalizer();
        $normalizers[] = new ProjectListDetailNormalizer();
        $normalizers[] = new ResponseProjectListNormalizer();
        $normalizers[] = new ResponseProjectListContentsItemNormalizer();
        $normalizers[] = new ResponseProjectDuplicateNormalizer();
        $normalizers[] = new ResponseProjectArchiveNormalizer();
        $normalizers[] = new InputProjectNormalizer();
        $normalizers[] = new ProjectItemNormalizer();
        $normalizers[] = new ItemNormalizer();
        $normalizers[] = new ItemWithOwnershipNormalizer();
        $normalizers[] = new ItemWithOwnershipprojectsItemNormalizer();
        $normalizers[] = new ResponseItemListNormalizer();
        $normalizers[] = new InputItemItemNormalizer();
        $normalizers[] = new ThemeNormalizer();
        $normalizers[] = new LeaderNormalizer();
        $normalizers[] = new TokenNormalizer();
        $normalizers[] = new TokenSignedDocsItemNormalizer();
        $normalizers[] = new InputTokenNormalizer();
        $normalizers[] = new InputTokenPersonsItemNormalizer();
        $normalizers[] = new ResponseCreateTokenNormalizer();
        $normalizers[] = new ResponseTokenListNormalizer();
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
        $normalizers[] = new ProjectsProjectIdDuplicatePostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdAddItemsPostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdAddItemsPostBodyItemsItemNormalizer();
        $normalizers[] = new ProjectsProjectIdRemoveItemsPostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdArchivePostBodyNormalizer();
        $normalizers[] = new ProjectsProjectIdTokensIdPutBodyNormalizer();
        return $normalizers;
    }
}