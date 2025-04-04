<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FieldOfViewVerticalFP extends AbstractTagGroup
{
    protected string $id = 'MXF:FieldOfViewVerticalFP';

    protected string $name = 'FieldOfViewVerticalFP';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Field Of View Vertical FP',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117964
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FieldOfViewVerticalFP',
            'desc' => [
                'en' => 'Field Of View Vertical FP',
            ],
        ],
    ];

    protected int $count = 0;
}
