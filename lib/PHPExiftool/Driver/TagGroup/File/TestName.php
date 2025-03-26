<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TestName extends AbstractTagGroup
{
    protected string $id = 'File:TestName';

    protected string $name = 'TestName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Test Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 85250
             * type : ?
             * writable : true
             * count :
             * flags : unsafe
             */
            'id' => 'Extra.File:TestName',
            'desc' => [
                'en' => 'Test Name',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2064;
}
