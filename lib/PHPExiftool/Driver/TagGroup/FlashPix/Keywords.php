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
class Keywords extends AbstractTagGroup
{
    protected string $id = 'FlashPix:Keywords';

    protected string $name = 'Keywords';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Keywords',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::SummaryInfo
             * line : 88288
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SummaryInfo.FlashPix:Keywords',
            'desc' => [
                'en' => 'Keywords',
            ],
        ],
    ];

    protected int $count = 0;
}
