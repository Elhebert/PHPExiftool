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
class CameraName extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:CameraName';

    protected string $name = 'CameraName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Camera Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::Properties
             * line : 237637
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::Properties.SigmaRaw:CameraName',
            'desc' => [
                'en' => 'Camera Name',
            ],
        ],
    ];

    protected int $count = 0;
}
