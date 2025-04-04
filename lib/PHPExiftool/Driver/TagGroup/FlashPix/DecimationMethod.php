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
class DecimationMethod extends AbstractTagGroup
{
    protected string $id = 'FlashPix:DecimationMethod';

    protected string $name = 'DecimationMethod';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Decimation Method',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Image
             * line : 87218
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Image.FlashPix:DecimationMethod',
            'desc' => [
                'en' => 'Decimation Method',
            ],
        ],
    ];

    protected int $count = 0;
}
