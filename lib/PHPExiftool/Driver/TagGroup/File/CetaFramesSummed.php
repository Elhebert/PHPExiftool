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
class CetaFramesSummed extends AbstractTagGroup
{
    protected string $id = 'File:CetaFramesSummed';

    protected string $name = 'CetaFramesSummed';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Ceta Frames Summed',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113363
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:CetaFramesSummed',
            'desc' => [
                'en' => 'Ceta Frames Summed',
            ],
        ],
    ];

    protected int $count = 0;
}
