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
class AlphaTilt extends AbstractTagGroup
{
    protected string $id = 'File:AlphaTilt';

    protected string $name = 'AlphaTilt';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Alpha Tilt',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113172
             * type : double
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:AlphaTilt',
            'desc' => [
                'en' => 'Alpha Tilt',
            ],
        ],
    ];

    protected int $count = 0;
}
