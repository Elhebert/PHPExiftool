<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputResolution extends AbstractTagGroup
{
    protected string $id = 'Nikon:OutputResolution';

    protected string $name = 'OutputResolution';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Output Resolution',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::CaptureOutput
             * line : 130084
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::CaptureOutput.Nikon:OutputResolution',
            'desc' => [
                'en' => 'Output Resolution',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
