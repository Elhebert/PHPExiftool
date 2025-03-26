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
class Security extends AbstractTagGroup
{
    protected string $id = 'FlashPix:Security';

    protected string $name = 'Security';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Security',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::SummaryInfo
             * line : 88330
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SummaryInfo.FlashPix:Security',
            'desc' => [
                'en' => 'Security',
            ],
        ],
    ];

    protected int $count = 0;
}
