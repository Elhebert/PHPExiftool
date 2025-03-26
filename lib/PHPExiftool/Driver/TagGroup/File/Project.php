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
class Project extends AbstractTagGroup
{
    protected string $id = 'File:Project';

    protected string $name = 'Project';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Project',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DPX::Main
             * line : 78074
             * type : string
             * writable : false
             * count : 200
             * flags :
             */
            'id' => 'DPX::Main.File:Project',
            'desc' => [
                'en' => 'Project',
            ],
        ],
    ];

    protected int $count = 200;
}
