<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FacesDetected extends AbstractTagGroup
{
    protected string $id = 'Ricoh:FacesDetected';

    protected string $name = 'FacesDetected';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faces Detected',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::FaceInfo
             * line : 233155
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::FaceInfo.Ricoh:FacesDetected',
            'desc' => [
                'en' => 'Faces Detected',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
