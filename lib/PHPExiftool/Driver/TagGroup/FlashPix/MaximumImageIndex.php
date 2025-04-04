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
class MaximumImageIndex extends AbstractTagGroup
{
    protected string $id = 'FlashPix:MaximumImageIndex';

    protected string $name = 'MaximumImageIndex';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Maximum Image Index',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::GlobalInfo
             * line : 87112
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::GlobalInfo.FlashPix:MaximumImageIndex',
            'desc' => [
                'en' => 'Maximum Image Index',
            ],
        ],
    ];

    protected int $count = 0;
}
