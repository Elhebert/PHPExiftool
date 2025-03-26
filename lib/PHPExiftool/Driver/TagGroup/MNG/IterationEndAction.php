<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IterationEndAction extends AbstractTagGroup
{
    protected string $id = 'MNG:IterationEndAction';

    protected string $name = 'IterationEndAction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Iteration End Action',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::TerminationAction
             * line : 112481
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::TerminationAction.MNG:IterationEndAction',
            'desc' => [
                'en' => 'Iteration End Action',
            ],
        ],
    ];

    protected int $count = 0;
}
