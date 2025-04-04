<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SBAAnalysisComplete extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:SBAAnalysisComplete';

    protected string $name = 'SBAAnalysisComplete';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'SBA Analysis Complete',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107126
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:SBAAnalysisComplete',
            'desc' => [
                'en' => 'SBA Analysis Complete',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
