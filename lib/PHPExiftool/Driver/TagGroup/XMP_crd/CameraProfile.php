<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CameraProfile extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:CameraProfile';

    protected string $name = 'CameraProfile';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Camera Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 281858
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::crd.XMP-crd:CameraProfile',
            'desc' => [
                'en' => 'Camera Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
