<?php

namespace HelloWorld\Repositories;

use HelloWorld\Models\Category;
use Plenty\Modules\Category\Contracts\CategoryBranchRepositoryContract;
use Plenty\Modules\Category\Contracts\CategoryRepositoryContract as PlentyCategoryRepositoryContract;
use HelloWorld\Contracts\CategoryRepositoryContract;
use Plenty\Modules\System\Contracts\SystemInformationRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\System\Models\Webstore;

/**
 * Class CategoryRepository
 */
class CategoryRepository implements CategoryRepositoryContract
{
    /**
     * @inheritdoc
     */
    public function all(array $filters = [], array $with = [])
    {
        $lang = 'de';

        if (isset($filters['lang'])) {
            $lang = $filters['lang'];
        }

        /** @var PlentyCategoryRepositoryContract $plentyCategoryRepo */
        $plentyCategoryRepo = pluginApp(PlentyCategoryRepositoryContract::class);
        /** @var WebstoreRepositoryContract $webstoreRepo */
        $webstoreRepo = pluginApp(WebstoreRepositoryContract::class);
        /** @var SystemInformationRepositoryContract $sysInfoRepo */
        $sysInfoRepo = pluginApp(SystemInformationRepositoryContract::class);

        /** @var Webstore $webstore */

        $systemDetails = $webstoreRepo->findByPlentyId($sysInfoRepo->loadValue('plentyId'));
        $categories = $plentyCategoryRepo->getLinklistTree('item', $lang, $systemDetails->id);

        return $categories;
    }
}
