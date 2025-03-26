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
class CreatedBy extends AbstractTagGroup
{
    protected string $id = 'FlashPix:CreatedBy';

    protected string $name = 'CreatedBy';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Created By',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::SummaryInfo
             * line : 88350
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::SummaryInfo.FlashPix:CreatedBy',
            'desc' => [
                'en' => 'Created By',
            ],
        ],
    ];

    protected int $count = 0;
}
