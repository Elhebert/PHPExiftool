<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExposureAdjust extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:ExposureAdjust';

    protected string $name = 'ExposureAdjust';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Exposure Adjust',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::HeaderExt
             * line : 237549
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::HeaderExt.SigmaRaw:ExposureAdjust',
            'desc' => [
                'en' => 'Exposure Adjust',
            ],
        ],
    ];

    protected int $count = 0;
}
