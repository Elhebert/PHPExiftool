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
class SubjectDetection extends AbstractTagGroup
{
    protected string $id = 'Nikon:SubjectDetection';

    protected string $name = 'SubjectDetection';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Subject Detection',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::MenuSettingsZ9
             * line : 136126
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Nikon::MenuSettingsZ9.Nikon:SubjectDetection',
            'desc' => [
                'en' => 'Subject Detection',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
