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
class STEMDefocus extends AbstractTagGroup
{
    protected string $id = 'File:STEMDefocus';

    protected string $name = 'STEMDefocus';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'STEM Defocus',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113202
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:STEMDefocus',
            'desc' => [
                'en' => 'STEM Defocus',
            ],
        ],
    ];

    protected int $count = 0;
}
