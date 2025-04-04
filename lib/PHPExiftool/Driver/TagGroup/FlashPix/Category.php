<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Category extends AbstractTagGroup
{
    protected string $id = 'FlashPix:Category';

    protected string $name = 'Category';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Category',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::DocumentInfo
             * line : 86941
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::DocumentInfo.FlashPix:Category',
            'desc' => [
                'en' => 'Category',
            ],
        ],
    ];

    protected int $count = 0;
}
