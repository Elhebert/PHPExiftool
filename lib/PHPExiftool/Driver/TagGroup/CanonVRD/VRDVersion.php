<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VRDVersion extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:VRDVersion';

    protected string $name = 'VRDVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver1
             * line : 82171
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver1.CanonVRD:VRDVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
