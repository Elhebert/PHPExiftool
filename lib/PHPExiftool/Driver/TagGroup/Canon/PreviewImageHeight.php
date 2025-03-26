<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageHeight extends AbstractTagGroup
{
    protected string $id = 'Canon:PreviewImageHeight';

    protected string $name = 'PreviewImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PreviewImageInfo
             * line : 52362
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PreviewImageInfo.Canon:PreviewImageHeight',
            'desc' => [
                'en' => 'Preview Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
