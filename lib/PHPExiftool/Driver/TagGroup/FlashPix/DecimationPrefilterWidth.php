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
class DecimationPrefilterWidth extends AbstractTagGroup
{
    protected string $id = 'FlashPix:DecimationPrefilterWidth';

    protected string $name = 'DecimationPrefilterWidth';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Decimation Prefilter Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::Image
             * line : 87229
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::Image.FlashPix:DecimationPrefilterWidth',
            'desc' => [
                'en' => 'Decimation Prefilter Width',
            ],
        ],
    ];

    protected int $count = 0;
}
