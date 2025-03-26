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
class JobFunctionName extends AbstractTagGroup
{
    protected string $id = 'MXF:JobFunctionName';

    protected string $name = 'JobFunctionName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Job Function Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114165
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:JobFunctionName',
            'desc' => [
                'en' => 'Job Function Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116355
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:JobFunctionName',
            'desc' => [
                'en' => 'Job Function Name',
            ],
        ],
    ];

    protected int $count = 0;
}
